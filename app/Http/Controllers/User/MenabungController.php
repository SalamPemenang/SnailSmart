<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class MenabungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formConvert($id)
    {
        $user = User::find($id);
        return view('user.nabung.convert', ['user' => $user]);
    }

    public function convert(Request $request, $id)
    {
        $saldo = $request->get('saldo');
        $convert = $request->get('convert');
        $tabungan = $request->get('save');

        $tambah = $convert + $saldo;
        $kurang = $tabungan - $convert;


        $user = User::find($id);
        $user->saldo = $tambah;
        $user->save  = $kurang;
        $user->save();

        return redirect()->back();

    }
}
