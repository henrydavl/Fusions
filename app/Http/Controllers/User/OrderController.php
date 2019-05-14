<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Paket;
use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param string $x
     *
     * @return Response
     */
    public function index($x)
    {
        switch ($x){
            case 'web':
                $pages = 'web';
                $tipe = 'Website';
                $pes = Auth::user()->pesanan->whereBetween('paket_id', [1,5]);
                break;
            case 'app':
                $pages = 'app';
                $tipe = 'Android Application';
                $pes = Auth::user()->pesanan->whereBetween('paket_id', [10,15]);
                break;
            case 'design':
                $pages = 'des';
                $tipe = 'Design';
                $pes = Auth::user()->pesanan->whereBetween('paket_id', [16,62]);
                break;
        }
        return view('user.project.index', compact('pages', 'pes', 'tipe'));
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
