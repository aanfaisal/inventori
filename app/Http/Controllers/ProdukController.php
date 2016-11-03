<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Produk;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class ProdukController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $produk = Produk::paginate(25);

        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Produk::create($requestData);

        Session::flash('flash_message', 'Produk Telah Ditambahkan!');

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $produk_id
     *
     * @return Response
     */
    public function show($produk_id)
    {
        $produk = Produk::findOrFail($produk_id);

        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $produk_id
     *
     * @return Response
     */
    public function edit($produk_id)
    {
        $produk = Produk::findOrFail($produk_id);

        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $produk_id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update($produk_id, Request $request)
    {
        
        $requestData = $request->all();
        
        $produk = Produk::findOrFail($produk_id);
        $produk->update($requestData);

        Session::flash('flash_message', 'Produk Telah Diupdate!');

        return redirect('produk');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $produk_id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function destroy($produk_id)
    {
        Produk::destroy($produk_id);

        Session::flash('flash_message', 'Produk Telah Dihapus!');

        return redirect('produk');
    }

}
