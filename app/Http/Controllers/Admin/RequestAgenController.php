<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RequestAgen;

class RequestAgenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = RequestAgen::all();
        return view('admin.reqAgen.index', ['request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = new RequestAgen;
        $req->user_id = $request->user_id;
        $req->type = $request->type;
        $req->answer1 = $request->answer1;
        $req->answer2 = $request->answer2;
        $req->answer3 = $request->answer3;
        $req->save();

        return redirect()->back()->with("success", "Pesan Terkirim Mohon Tunggu Konfirmasi Dari Admin Dan Cek Email Yang Anda Masukan");

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
        $request = RequestAgen::find($id);
        return view('admin.reqAgen.edit', ['request' => $request]);
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
        $request = RequestAgen::find($id);
        $request->answer1 = $request->answer1;
        $request->answer2 = $request->answer2;
        $request->answer3 = $request->answer3;
        $request->save();

        return redirect()->route('admin.agen.request');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = RequestAgen::find($id);
        $request->delete();

        return redirect()->route('admin.agen.request');
    }

}
