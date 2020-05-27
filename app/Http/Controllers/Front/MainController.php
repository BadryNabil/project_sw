<?php

namespace App\Http\Controllers\Front;

use App\College;
use App\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public  function home(Request $request)
    {
    	$colleges=College::take(6)->get();
    	$settings = Setting::all();
        return view('front.home' , compact(['colleges','settings']));

	}
    

    
}

    