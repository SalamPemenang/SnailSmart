<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use App\Donate;
use App\Government;

class DonasiController extends Controller
{
    public function category(Request $request)
    {
    	// $government = Government::all();
    	// $lembaga = DB::table('government')->where('type_id', 2)->get();
    	$category = Category::all();
    	return view('user.donasi.category', compact('category'));	
    }

    public function government(Request $request)
    {
        $government = Government::all();
        $id = $request->get('category_id');
        $category = null;
        if($id){
            $category = Category::find($id);
            $government = Government::with('category')->where('category_id',$id)->paginate(8);
        }else{
            $category = 'semua';
            $government = Government::paginate(8);
        }
    	return view('user.donasi.government', ['category' => $category, 'government' => $government, 'id' => $id]);
    }

    public function formDonate($id)
    {
        $category = Category::find($id);
    	$government = Government::find($id);
    	return view('user.donasi.formDonate', ['category' => $category,'government' => $government]);
    }

    public function donate(Request $request)
    {
        
    }

}
