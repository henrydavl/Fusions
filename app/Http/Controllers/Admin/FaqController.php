<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pages = 'faq';
        $faq = Faq::all();
        return view('admin.faq.index', compact('pages', 'faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $pages = 'newfaq';
        return view('admin.faq.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Faq::create($request->all());
        return redirect()->route('faq.index')->with('Success', 'Added New Frequent Asked Question');
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
        $faq = Faq::find($id);
        $pages = 'faq';
        return view('admin.faq.edit', compact('faq', 'pages'));
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
        $faq = Faq::find($id);
        $faq->update($request->all());
        return redirect()->route('faq.index')->with('Success', 'Frequent Asked Question Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Faq::find($id)->delete();
        return redirect()->route('faq.index')->with('Success', 'Frequent Asked Question Deleted');
    }
}
