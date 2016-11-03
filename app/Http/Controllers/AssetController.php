<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Asset;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class AssetController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $asset = Asset::paginate(25);

        return view('asset.index', compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('asset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Asset::create($requestData);

        Session::flash('flash_message', 'Asset Telah Ditambahkan!');

        return redirect('asset');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $asset_id
     *
     * @return Response
     */
    public function show($asset_id)
    {
        $asset = Asset::findOrFail($asset_id);

        return view('asset.show', compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $asset_id
     *
     * @return Response
     */
    public function edit($asset_id)
    {
        $asset = Asset::findOrFail($asset_id);

        return view('asset.edit', compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $asset_id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update($asset_id, Request $request)
    {
        
        $requestData = $request->all();
        
        $asset = Asset::findOrFail($asset_id);
        $asset->update($requestData);

        Session::flash('flash_message', 'Asset Telah Diupdate!');

        return redirect('asset');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $asset_id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function destroy($asset_id)
    {
        Asset::destroy($asset_id);

        Session::flash('flash_message', 'Asset Telah Dihapus!');

        return redirect('asset');
    }

}
