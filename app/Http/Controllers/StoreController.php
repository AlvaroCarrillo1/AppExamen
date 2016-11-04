<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
     public function index(){

    	//dd($products);
    return view('store.index');
    }
}
