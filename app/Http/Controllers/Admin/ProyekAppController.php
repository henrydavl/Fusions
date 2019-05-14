<?php

namespace App\Http\Controllers\Admin;

use App\ProyekApp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProyekAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $pages = 'proj';
        $app = ProyekApp::findOrFail($id);
        return view('admin.projects.app.show', compact('app', 'pages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = 'proj';
        $app = ProyekApp::findOrFail($id);
        return view('admin.projects.app.edit', compact('app', 'pages'));
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
        $app = ProyekApp::findOrFail($id);
        $update = $request->all();
        if ($file = $request->file('zipData')){
            $type = $file->getClientOriginalExtension();
            $name = $app->id."_zipData.".$type;
            $file->move('zip', $name);
            $update['zipData'] = $name;
        }
        $app->update($update);
        return redirect()->back()->with('Success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
