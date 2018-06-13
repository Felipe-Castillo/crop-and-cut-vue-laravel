<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function upload( Request $request)
    {


    	$request->user()->update(['avatar'=>$request->image]);
    	/*
    	if ($request->hasFile('image')) 
    	{    	

    		$imageName=$request->image->getClientOriginalName();

    		$request->image->storeAs('public',$imageName);
    	}*/
    	//$request->user()->avatar=$imageName;
    	//$request->user()->save();
    	return response()->json(['status'=>202]);
    }

    public function saveImage(ImageRequest $request)
    {
    	if ($request->hasFile('image')) 
    	{    	
    		$imageName=$request->image->getClientOriginalName();

    		$request->image->storeAs('public',$imageName);
    	}
    	$request->user()->update(['avatar'=>$imageName]);
    	return response()->json(['status'=>202]);

    }
}
