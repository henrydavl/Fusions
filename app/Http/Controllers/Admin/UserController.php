<?php

namespace App\Http\Controllers\Admin;

use App\Events\UserActivationEmail;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        $ids = Auth::id();
        $users = User::all()->where('role_id', 2)->sortBy('id');
        $admin = User::all()->where('id', '!=', $ids)->where('role_id', 1)->sortBy('id');
        $pages = 'ulist';
        return view('admin.user.index', compact('users','admin', 'pages'));
    }

    public function create()
    {
        $pages = 'uadd';
        $roles = Role::pluck('nama','id')->all();
        return view('admin.user.add', compact('roles','pages'));
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->new($request->all());
        if (empty($user)) {
            redirect('/admin/user/')->with('Fail', 'Failed to add user');
        }
        event(new Registered($user));
        event(new UserActivationEmail($user));
        return redirect('/admin/user')->with('Success', 'Added New User, please confirm email address');
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
            'role_id' => $data['role_id'],
            'active' => false,
            'activation_token' => str_random(20)
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('nama','id')->all();
        if (Auth::id() == $id){
            $pages = 'dash';
            return view('admin.profile', compact('user','roles','pages'));
        }else{
            $pages = 'ulist';
            return view('admin.user.edit', compact('user','roles','pages'));
        }
    }

    public function update(Request $request, $id)
    {
        $this->validateImage();
        $user = User::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        if ($file = $request->file('photo')){
            $tmp = str_replace(" ", "-",$request->name);
            $type = $file->getClientOriginalExtension();
            $name = $tmp."_photoProfile.".$type;
            $file->move('images', $name);
            $image = Image::make('images/' . $name)->fit(300, 300);
            $image->save();
            $pic = Photo::where('path', $name)->first();
            if ($pic){
                $pic->update(['path'=>$name]);
            }else{
                $photo = Photo::create(['path'=>$name]);
                $input['photo_id'] = $photo->id;
            }
        }

        $user->update($input);
        if (Auth::id() == $id){
            return redirect('/admin/dashboard')->with('Success', 'Profile Updated');
        }else{
            return redirect('/admin/user')->with('Success', 'User '.$request->name.' Updated');
        }
    }

    private function validateImage()
    {
        return request()->validate([
            'photo' => 'sometimes|file|image|max:5000',
        ]);
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $photo = Photo::where('id' ,$user->photo_id)->first();
        if ($user->photo){
            unlink(public_path().'/images/'.$user->photo->path);
            $photo->forceDelete();
            $user->delete();
        }else{
            $user->delete();
        }
        return redirect('/admin/user')->with('Success', 'User Deleted');
    }

    public function deactivate(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->update(['active' => false]);
        return redirect('/admin/user')->with('Success', 'User Deactivated');
    }

    public function activate(Request $request)
    {
        $user = User::findOrFail($request->id);
//        return $user;
        $user->update(['active' => true]);
        return redirect('/admin/user')->with('Success', 'User Activated');
    }
}
