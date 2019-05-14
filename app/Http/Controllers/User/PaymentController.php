<?php

namespace App\Http\Controllers\User;

use App\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays = Auth::user()->pembayaran->all();
        $pages = 'paylist';
        return view('user.payment.index', compact('pays', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'addpay';
        return view('user.payment.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        Pembayaran::create([
            'user_id' => Auth::id(),
            'namaBank' => $request->namaBank,
            'nomorRekening' => $request->nomorRekening,
            'atasNama' => $request->atasNama
        ]);
        return redirect('user/payment')->with('Success', 'Added New Payment Method');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'namaBank' => ['required', 'string', 'max:255', 'min:3'],
            'nomorRekening' => ['required', 'string', 'max:255', 'unique:pembayarans'],
            'atasNama' => ['required', 'string', 'max:255', 'min:3'],
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = 'paylist';
        $pay = Pembayaran::findOrFail($id);
        return view('user.payment.edit', compact('pages', 'pay'));
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
        $pay = Pembayaran::findOrFail($id);
        $pay->update([
            'nomorRekening' => $request->acc,
            'atasNama' => $request->owner
        ]);
        return redirect()->route('payment.index')->with('Success', 'Payment Method Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pembayaran::findOrFail($id)->delete();
        return redirect()->route('payment.index')->with('Success', 'Deleted Payment Method');
    }
}
