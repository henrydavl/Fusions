<?php

namespace App\Http\Controllers;

use App\PaketApp;
use App\PaketWeb;
use App\Pesanan;
use App\Portofolio;
use App\Review;

class PagesController extends Controller
{
    public function index(){
        $reviews = Review::all()->take(3);
        $cust = Review::all()->count();
        $pes = Pesanan::all()->count();
        return view("index", compact('cust', 'reviews', 'pes'));
    }

    public function design(){
        // return view("index");
    }

    public function web(){
        $companies = PaketWeb::whereBetween('id' , [1,2])->get();
        $bus = PaketWeb::whereBetween('id' , [3,5])->get();
        return view("web", compact('companies','bus'));
    }

    public function mobile(){
        $comps = PaketApp::whereBetween('id', [1,3])->get();
        $bus = PaketApp::whereBetween('id', [4,6])->get();
        return view("apps", compact('comps', 'bus'));
    }

    public function portfolio(){
        $web = Portofolio::where('tipe', '0')->get();
        $app = Portofolio::where('tipe', '1')->get();
        $des = Portofolio::where('tipe', '2')->get();
        return view("portfolio" , compact('web', 'app', 'des'));
    }

    public function meet(){
        return view("meet-us");
    }

    public function contact(){
        return view("contact-us");
    }

    public function sign(){
        return view("sign-up");
    }

//    public function checkout(){
//        return view("checkout");
//    }

//    public function review(){
//        return view("review");
//    }
}
