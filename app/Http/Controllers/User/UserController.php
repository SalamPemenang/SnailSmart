<?php

namespace App\Http\Controllers\USer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function editProfile($id, Request $request)
    {
    		$user = User::find($id);
    		$user->nik = $request->nik;
    		$user->no_rek = $request->no_rek;
    		$user->name = $request->name;
    		$user->email = $request->email;
    		$user->password = $request->password;
    		$user->address = $request->address;
    		$user->phone = $request->phone;
    		$user->photo = $request->photo;
    		$user->save();

    }	

}
