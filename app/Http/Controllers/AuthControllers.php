<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Student;
use Str;


class AuthControllers extends Controller
{

  public function register(Request $request)
    {
      $validator=validator()->make($request->all(),
      [
        'username'           =>'required',
        'password'           =>'required|digits:8',
        'email'              =>'required|unique:student',
        'phone'              =>'required|digits:11',
        'city'               =>'required',
      ]);
      if ($validator->fails())
      {
        return back()->with('error','Error Review your Data');
      }
      $request->merge(['password'=>bcrypt($request->password)]);
      $student=Student::create($request->all());
      $student->api_token=Str::random(60);
      $student->save();
       return redirect('project');
    }
    public function login(Request $request)
    {
      $validator=validator()->make($request->all(),
      [
        'email'              =>'required',
        'password'           =>'required',
      ]);
      if ($validator->fails())
      {
        return back()->with('error','Error Review your Data');
      }
      $student=Student::where('email',$request->email)->first();
      if($student)
      {
        if (Hash::check($request->password,$student->password))
         {
             return redirect('project');
        }
        else
        {
          return back()->with('error',' Wrong Password ');
        }
      }
      else
          return back()->with('error','Wrong Mail');


    }
        
     
   
  }



  
