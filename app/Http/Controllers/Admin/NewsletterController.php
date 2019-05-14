<?php

namespace App\Http\Controllers\Admin;

use App\Events\NewsletterEvent;
use App\Events\WelcomeEmailEvent;
use App\Http\Controllers\Controller;
use App\Subcriber;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subs = Subcriber::all();
        $pages = 'sublist';
        return view('admin.newsletter.index', compact('pages', 'subs'));
    }

    /**
     * Create new email for emailing subscriber list
     *
     * @return Response
     */
    public function create()
    {
        $pages = 'sendm';
        return view('admin.newsletter.send', compact('pages'));
    }

    /**
     *  Add new subscriber
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validateSubs($request);
        Subcriber::create($request->all());
        event(new WelcomeEmailEvent($request->email));
        return redirect()->back()->with('Success', 'Added as Subscriber');
    }

    protected function validateSubs(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:subcribers,email'
        ], [
            'email.unique' => 'You already make a subscription'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Subcriber::findOrFail($id)->delete();
        return redirect()->route('newsletter.index')->with('Success', 'Subscriber Added');
    }

    /**
     *  Send form to subscriber list
     *
     * @param Request $request
     * @return Response
     */
    public function sendmail(Request $request){
        $mail = $request->all();
        event(new NewsletterEvent($mail));
        return redirect('admin/newsletter')->with('Success','An email have broadcast');
    }
}
