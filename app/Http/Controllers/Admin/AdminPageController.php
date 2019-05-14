<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\MeetUs;
use App\Pesanan;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard(){
        $blog = Blog::all()->count();
//        $user = Role::with('users')->where('nama', 'user')->get()->count();
        $user = User::where('role_id', 2)->get()->count();
        $meet = MeetUs::all()->where('admin_id', null)->count();
        $project = Pesanan::all()->count();
        $pages = 'dash';
        return view('admin.dashboard', compact('blog','user', 'meet', 'project', 'pages'));
    }
}
