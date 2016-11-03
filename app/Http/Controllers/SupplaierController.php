<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Supplaier;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class SupplaierController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $supplaier = Supplaier::paginate(25);

        return view('supplaier.index', compact('supplaier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('supplaier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Supplaier::create($requestData);

        Session::flash('flash_message', 'Supplaier Telah Ditambahkan!');

        return redirect('supplaier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $supplaier_id
     *
     * @return Response
     */
    public function show($supplaier_id)
    {
        $supplaier = Supplaier::findOrFail($supplaier_id);

        return view('supplaier.show', compact('supplaier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $supplaier_id
     *
     * @return Response
     */
    public function edit($supplaier_id)
    {
        $supplaier = Supplaier::findOrFail($supplaier_id);

        return view('supplaier.edit', compact('supplaier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $supplaier_id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update($supplaier_id, Request $request)
    {
        
        $requestData = $request->all();
        
        $supplaier = Supplaier::findOrFail($supplaier_id);
        $supplaier->update($requestData);

        Session::flash('flash_message', 'Supplaier Telah Diupdate!');

        return redirect('supplaier');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $supplaier_id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function destroy($supplaier_id)
    {
        Supplaier::destroy($supplaier_id);

        Session::flash('flash_message', 'Supplaier Telah Dihapus!');

        return redirect('supplaier');
    }

}
