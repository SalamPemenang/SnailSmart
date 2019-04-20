<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Agen;


class ManageAgenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agen = Agen::all();
        return view('admin.agen.index', ['agen' => $agen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.agen.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $virtual =  ("TP".rand(0,1000));
        
        $agen = new Agen;

        if ($request->get('virtual')) {
            $agen->virtual_account = $request->get('virtual');
        }else{
            $agen->virtual_account = $virtual;
        }


        $agen->nik = $request->nik;
        $agen->no_rek = $request->no_rek;
        $agen->name = $request->name;
        $agen->email = $request->email;
        $agen->password = Hash::make($request->password);
        $agen->phone = $request->phone;
        $agen->save();

        return redirect()->route('admin.agen');


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
        $agen = Agen::find($id);
        return view('admin.agen.edit', ['agen' => $agen]);
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
        $agen = Agen::find($id);
        $agen->nik = $request->nik;
        $agen->no_rek = $request->no_rek;
        $agen->name = $request->name;
        $agen->email = $request->email;
        $agen->phone = $request->phone;
        $agen->save();

        return redirect()->route('admin.agen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agen = Agen::find($id);
        $agen->delete();
        return redirect()->route('admin.agen');
    }
}
