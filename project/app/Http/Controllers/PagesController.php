<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
    $arrays=DB::table('users')->get();
    	return view('ps',compact('arrays'));
    }
    
}