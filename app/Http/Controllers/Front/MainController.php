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
  public function search(Request $request)
    {
      $this->validate($request,[
       'input' =>'required'
      ]);
      $input = $request->input;
      $colleges = College::where('name' , 'like' , '%' . $input . '%')
                        ->orWhere('grade' , '<=' ,  $input )->get();
      if ($colleges)
      {
        return view('front.predict',compact('colleges'));
      }

    }
    public function predict()
    {
      $colleges = College::all();
      return view('front.predict' , compact('colleges'));
       
    }
    
    public function signin()
    {
      $settings = Setting::all();
      return view('front.signin', compact('settings'));

    }
    public function log()
    {
      $settings = Setting::all();
      return view('front.log', compact('settings'));

    }

    public function CollegesAll()
    {
      $colleges = College::all();
      return view('front.Colleges' , compact('colleges'));

    }


    public  function detailCollege($id)
    {
      $college = College::find($id);
      $colleges = College::take(9)->get();
      return view('front.college' , compact(['college','colleges']) );
    }
    public function aboutApp()
    {
      $settings = Setting::all();
      return view('front.about' , compact('settings'));

    }

    public function feedback()
    {
    $settings = Setting::all();
    return view('front.feedback', compact('settings'));
    }
    public function clickPost($id)
    {
        $college = College::findorfail($id); 
        $college->increment('student'); 
        $college->update(); 
        return back();
    }   

    
}

    