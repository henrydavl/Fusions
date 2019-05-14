<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function dashboard(){
        $pages = 'dash';
        $web = Auth::user()->pesanan->whereBetween('paket_id', [1,5])->count();
        $app = Auth::user()->pesanan->whereBetween('paket_id', [10,15])->count();
        $des = Auth::user()->pesanan->whereBetween('paket_id', [16,62])->count();
        return view('user.index', compact('pages', 'web', 'app', 'des'));
    }
}
