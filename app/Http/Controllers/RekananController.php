<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Rekanan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class RekananController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $rekanan = Rekanan::paginate(25);

        return view('rekanan.index', compact('rekanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('rekanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Rekanan::create($requestData);

        Session::flash('flash_message', 'Rekanan Telah Ditambahkan!');

        return redirect('rekanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $rekanan_id
     *
     * @return Response
     */
    public function show($rekanan_id)
    {
        $rekanan = Rekanan::findOrFail($rekanan_id);

        return view('rekanan.show', compact('rekanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $rekanan_id
     *
     * @return Response
     */
    public function edit($rekanan_id)
    {
        $rekanan = Rekanan::findOrFail($rekanan_id);

        return view('rekanan.edit', compact('rekanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $rekanan_id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update($rekanan_id, Request $request)
    {
        
        $requestData = $request->all();
        
        $rekanan = Rekanan::findOrFail($rekanan_id);
        $rekanan->update($requestData);

        Session::flash('flash_message', 'Rekanan Telah Diupdate!');

        return redirect('rekanan');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $rekanan_id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function destroy($rekanan_id)
    {
        Rekanan::destroy($rekanan_id);

        Session::flash('flash_message', 'Rekanan Telah Dihapus!');

        return redirect('rekanan');
    }

}
