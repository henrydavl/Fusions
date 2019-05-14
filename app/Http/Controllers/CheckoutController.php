<?php

namespace App\Http\Controllers;

use App\Color;
use App\Events\OrderConfirmation;
use App\Events\UserActivationEmail;
use App\Paket;
use App\PaketApp;
use App\PaketWeb;
use App\Pesanan;
use App\Photo;
use App\ProyekApp;
use App\ProyekWeb;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if (Auth::user()){
            $input['user_id'] = Auth::id();
        }else{
            $this->validator($request->all())->validate();
            $user = $this->new($request->all());
            event(new Registered($user));
            event(new UserActivationEmail($user));
            $input['user_id'] = $user->id;
        }

        $color = Color::create([
            'colorPrimary' => $input['colorPrimary'],
            'colorSecondary' => $input['colorSecondary'],
            'colorTertiary' => $input['colorTertiary'],
        ]);

        $app = PaketApp::where('nama', $request->package)->first();
        if ($app){
            $dead = $app->duration;
            $paket = Paket::where('kodePaket_id', $app->id)->where('kodePaket_type', 'App\PaketApp')->first();
            $input['paket_id'] = $paket->id;
            $pesanan = Pesanan::create([
                'user_id' => $input['user_id'],
                'paket_id' => $input['paket_id'],
                'buktiTransfer' => '-',
                'statusBayar' => '0',
                'statusTerima' => '0',
                'waktuTerima' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            ProyekApp::create([
                'pesanan_id' => $pesanan->id,
                'nama' => $input['appname'],
                'themeRef' => $input['reff'],
                'color_id' => $color->id,
                'penjelasan' => $input['description'],
                'status' => '0',
                'deadline' => Carbon::now()->addDay($dead)->format('Y-m-d H:i:s')
            ]);
            $mail = [
                'id' => $pesanan->id,
                'email' => Auth::user()->email,
                'package_name' => $app->nama,
                'package_type' => "Mobile Application Development",
                'harga' => $app->harga,
                'total' => $app->harga
            ];
        }else{
            $web = PaketWeb::where('nama', $request->package)->first();
            $dead = $web->duration;
            $paket = Paket::where('kodePaket_id', $web->id)->where('kodePaket_type', 'App\PaketWeb')->first();
            $input['paket_id'] = $paket->id;
            $pesanan = Pesanan::create([
                'user_id' => $input['user_id'],
                'paket_id' => $input['paket_id'],
                'buktiTransfer' => '-',
                'statusBayar' => '0',
                'statusTerima' => '0',
                'waktuTerima' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            ProyekWeb::create([
                'pesanan_id' => $pesanan->id,
                'themeRef' => $input['reff'],
                'color_id' => $color->id,
                'penjelasan' => $input['description'],
                'status' => '0',
                'deadline' => Carbon::now()->addDay($dead)->format('Y-m-d H:i:s')
            ]);
            $mail = [
                'id' => $pesanan->id,
                'email' => Auth::user()->email,
                'package_name' => $web->nama,
                'package_type'=> 'Website Development',
                'harga' => $web->harga,
                'total' => $web->harga
            ];
        }

        event(new OrderConfirmation($mail));
        return view('/thankyou');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function new(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'active' => false,
            'activation_token' => str_random(20)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function web(Request $request)
    {
        $web = PaketWeb::where('id', $request->id)->first();
        return view('/checkout', compact('web'));
    }

    public function app(Request $request)
    {
        $app = PaketApp::where('id', $request->id)->first();
        return view('/checkout', compact('app'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function showForm()
    {
        return view('/upload-payment');
    }

    public function ConfirmPayment(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $order = Pesanan::where('user_id', $user->id)->where('id', $request->ids)->first();
        if ($file = $request->receipt){
            $tmp = "Order@".$request->ids."orderedBy@".$user->name;
            $type = $file->getClientOriginalExtension();
            $name = $tmp."_transferReceipt.".$type;
            $file->move('receipt', $name);
            $image = Image::make('receipt/' . $name);
            $image->save();
            $pic = Photo::where('path', $name)->first();
            if ($pic){
                $pic->update(['path'=>$name]);
            }else{
                $photo = Photo::create(['path'=>$name]);
            }
        }
        $order->update(['buktiTransfer' => $photo->path, 'statusBayar' => '1']);
        return redirect("/user/dashboard")->with('Success','Receipt received, please wait for confirmation');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
