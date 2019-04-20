<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Government;

class ManageGovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $government = Government::all();
        return view('admin.government.index', ['government' => $government]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.government.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $government = new Government;
        $government->npsn = $request->npsn;
        $government->no_rek = $request->no_rek;
        $government->name = $request->name;
        $government->address = $request->address;
        $government->email = $request->email;
        $government->password = Hash::make($request->password);
        $government->phone = $request->phone;
        $government->website = $request->website;
        $government->save();

        return redirect()->route('admin.government');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $government = Government::find($id);
        return view('admin.government.edit', ['government' => $government]);
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
        $government = new Government;
        $government->npsn = $request->npsn;
        $government->no_rek = $request->no_rek;
        $government->name = $request->name;
        $government->address = $request->address;
        $government->email = $request->email;
        $government->password = Hash::make($request->password);
        $government->phone = $request->phone;
        $government->website = $request->website;
        $government->save();

        return redirect()->route('admin.government');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $government = Government::find($id);
        $government->delete();
        return redirect()->route('admin.government');
    }
}
