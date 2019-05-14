<?php

namespace App\Http\Controllers\Admin;

use App\ContactUs;
use App\Events\ReplyContactUsMailEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inboxes = ContactUs::paginate(4,['*'],'inbox');
        $history = ContactUs::onlyTrashed()->paginate(4,['*'],'history');
        $pages = 'inbox';
        return view('admin.inbox.index', compact('inboxes','history','pages'));
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
        $inbox = ContactUs::findOrFail($id);
        $input = $request->all();
        event(new ReplyContactUsMailEvent($input));
        $inbox->update(['admin_id' => $request->ids]);
        $inbox->delete();
        return redirect('admin/inbox')->with('Success', 'Replied a message');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inbox = ContactUs::where('id', $id)->first();
//        return $user;0
        $inbox->delete();
        return redirect('/admin/inbox')->with('Success', 'Message Deleted');
    }
}
