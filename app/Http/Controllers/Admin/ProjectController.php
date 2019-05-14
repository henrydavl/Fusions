<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProyekApp;
use App\ProyekDesain;
use App\ProyekWeb;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pages = 'proj';
        $webs = ProyekWeb::paginate(5,['*'],'web');
        $apps = ProyekApp::paginate(5,['*'],'apps');
        $dess = ProyekDesain::paginate(5,['*'],'design');
        return view('admin.projects.index', compact('pages', 'webs', 'apps', 'dess'));
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
        //
    }

    /**
     * Accept and reject project
     *
     * @param string $tipe
     * @param int $id
     * @param string $acdc
     * @return Response
     */
    public function acdc($tipe, $id, $acdc)
    {
        switch ($tipe){
            case 'web':
                if ($acdc == 'accept'){
                    ProyekWeb::find($id)->pesanan()->update([
                        'statusTerima' => '2'
                    ]);
                    ProyekWeb::find($id)->update([
                        'status' => '1'
                    ]);
                    $mail = 'Web Project - #WEB'.str_pad($id, 4, '0', STR_PAD_LEFT).' Accepted';
                    break;
                } elseif($acdc == 'reject') {
                    ProyekWeb::find($id)->pesanan()->update([
                        'statusTerima' => '1'
                    ]);
                    $mail = 'Web Project - #WEB'.str_pad($id, 4, '0', STR_PAD_LEFT).' Rejected';
                    break;
                } else {
                    $x = ProyekWeb::find($id);
                    $x->pesanan->delete();
                    $x->delete();
                    $mail = 'Web Project - #WEB'.str_pad($id, 4, '0', STR_PAD_LEFT).' Deleted';
                    return redirect()->route('project.index')->with('Success', $mail);
                    break;
                }
            case 'app':
                if ($acdc == 'accept'){
                    ProyekApp::find($id)->pesanan()->update([
                        'statusTerima' => '2'
                    ]);
                    ProyekApp::find($id)->update([
                        'status' => '1'
                    ]);
                    $mail = 'App Project - #APP'.str_pad($id, 4, '0', STR_PAD_LEFT).' Accepted';
                    break;
                } elseif($acdc == 'reject') {
                    ProyekApp::find($id)->pesanan()->update([
                        'statusTerima' => '1'
                    ]);
                    $mail = 'App Project - #APP'.str_pad($id, 4, '0', STR_PAD_LEFT).' Rejected';
                    break;
                } else {
                    $x = ProyekApp::find($id);
                    $x->pesanan->delete();
                    $x->delete();
                    $mail = 'App Project - #APP'.str_pad($id, 4, '0', STR_PAD_LEFT).' Deleted';
                    return redirect()->route('project.index')->with('Success', $mail);
                    break;
                }
            case 'design':
                if ($acdc == 'accept'){
                    ProyekDesain::find($id)->pesanan()->update([
                        'statusTerima' => '2'
                    ]);
                    ProyekDesain::find($id)->update([
                        'status' => '1'
                    ]);
                    $mail = 'Design Project - #DES'.str_pad($id, 4, '0', STR_PAD_LEFT).' Accepted';
                    break;
                } elseif($acdc == 'reject') {
                    ProyekDesain::find($id)->pesanan()->update([
                        'statusTerima' => '1'
                    ]);
                    $mail = 'Design Project - #DES'.str_pad($id, 4, '0', STR_PAD_LEFT).' Rejected';
                    break;
                } else {
                    $x = ProyekDesain::find($id);
                    $x->pesanan->delete();
                    $x->delete();
                    $mail = 'Design Project - #DES'.str_pad($id, 4, '0', STR_PAD_LEFT).' Deleted';
                    return redirect()->route('project.index')->with('Success', $mail);
                    break;
                }
        }
        return redirect()->back()->with('Success', $mail);
    }
}
