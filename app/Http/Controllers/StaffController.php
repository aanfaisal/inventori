<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Staff;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class StaffController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $staff = Staff::paginate(25);

        return view('staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Staff::create($requestData);

        Session::flash('flash_message', 'Staff Telah Ditambahkan!');

        return redirect('staff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $staff_id
     *
     * @return Response
     */
    public function show($staff_id)
    {
        $staff = Staff::findOrFail($staff_id);

        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $staff_id
     *
     * @return Response
     */
    public function edit($staff_id)
    {
        $staff = Staff::findOrFail($staff_id);

        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $staff_id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function update($staff_id, Request $request)
    {
        
        $requestData = $request->all();
        
        $staff = Staff::findOrFail($staff_id);
        $staff->update($requestData);

        Session::flash('flash_message', 'Staff Telah Diupdate!');

        return redirect('staff');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $staff_id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function destroy($staff_id)
    {
        Staff::destroy($staff_id);

        Session::flash('flash_message', 'Staff Telah Dihapus!');

        return redirect('staff');
    }

}
