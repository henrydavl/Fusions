<?php

namespace App\Http\Controllers\Admin;

use App\MeetUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'mreq';
        $requests = MeetUs::where('admin_id', null)->paginate(4,['*'],'pending');
        $approve = MeetUs::where('deleted_at', null)->whereNotNull('admin_id')->paginate(4,['*'],'approved');
        $reject = MeetUs::onlyTrashed()->paginate(4,['*'],'rejected');
        return view('admin.request.index', compact('requests','pages', 'approve', 'reject'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = MeetUs::findOrFail($id);
        $req->update(['admin_id' => $request->ids]);
        return redirect('/admin/request')->with('Success', 'Request Approved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $req = MeetUs::findOrFail($id);
        $ids = Auth::id();
        $req->update(['admin_id' => $ids]);
        $req->delete();
        return redirect('/admin/request')->with('Success', 'Request Deleted / Rejected');
    }
}
