<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Http\Requests\MeetUsRequest;
use App\MeetUs;
use App\Subcriber;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function meetus(MeetUsRequest $request){
        $place = array('----','Starbucks Gwalk Citraland Surabaya', 'Excelso Gwalk Citraland Surabaya', 'Calipto Cafe TPR Citraland');
//        $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        $time = array('13:00', '13:30', '14:00');

        MeetUs::create([
            'dateMeet'      => $request->date." ".$request->month,
            'timeMeet'      => $time[$request->time],
            'name'          => $request->lname.", ".$request->fname,
            'email'         => $request->email,
            'methodMeet'    => $request->metod == 0 ? "Online" : "Offline",
            'phoneOrSkype'  => $request->phone ? $request->phone : "-",
            'placeMeet'     => $place[$request->place] ? $place[$request->place] : $place[$request->place],
            'topic_design'  => $request->design ? 2 : 1,
            'topic_web'     => $request->web ? 2 : 1,
            'topic_app'     => $request->app ? 2 : 1,
            'notes'         => $request->else
        ]);

        return redirect()->route('meet-us')->with('Success', 'Your request has recorded! Please wait for a response');
    }

    public function contactus(Request $request)
    {
        ContactUs::create([
            'name' => $request->lname . ", " . $request->fname,
            'email' => $request->email,
            'body' => $request->else
        ]);
        return redirect()->route('contact-us')->with('Success', 'Message sent! Please wait for a response');
    }
}
