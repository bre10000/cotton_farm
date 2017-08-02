<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activity;

class api extends Controller
{
    //
    public function getactivity($id){
    	
    	return response()->json(activity::find($id));
    	 

    }
}
