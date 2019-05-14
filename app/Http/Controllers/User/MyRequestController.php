<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\MeetUs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class MyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $requests = MeetUs::where('email', Auth::user()->email)->where('deleted_at', null)->where('admin_id', null)->get();
        $approve = MeetUs::where('email', Auth::user()->email)->where('deleted_at', null)->whereNotNull('admin_id')->get();
        $reject = MeetUs::where('email', Auth::user()->email)->onlyTrashed()->get();
        $pages = 'mreq';
        return view('user.request.index', compact('pages', 'requests', 'approve', 'reject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
