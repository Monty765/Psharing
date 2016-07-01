<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Guzzle\Tests\Plugin\Redirect;
use App\Image;
use Storage;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
	
   public function upload(Request $request){
   	
   $files = $request->file('file');
   if(!empty($files)):

   		foreach ($files as $file) :
   			Storage::put($file->getClientOriginalName(),file_get_contents($file));
   		endforeach;
   	
   	endif; 
    
    return view('appviews.uploads');
    }

	/**
	 * Store a newly uploaded resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		// Store records process
   	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function show(){
		// Show lists of the images
    }
}
