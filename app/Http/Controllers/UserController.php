<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function resetPassword()
     {
       return view('users.reset-password');
     }

     public function resetPasswordSave(Request $request)
     {
       $this->validate($request, [
            
            'old-password'    => 'required',
            'password'        => 'required|confirmed',

        ]);
        $user = Auth::user();
        if (Hash::check($request->input('old-password') ,$user->password)) {
          $user->password = bcrypt($request->input('password'));
          $user->save();
       
            return view('users.reset-password');
        }else{
            
            return view('users.reset-password');
        }
      }
    public function index()
    {

        $users=User::paginate(20);
        return view('users.index')->with('users',$users);
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
           'name'        => 'required',
           'email'       => 'email',
           'phone'       =>'required'
           
       ]);
        $record = User::findOrFail($id);
        $record->update($request->all());
        return redirect(route('users.index',$record->id));
    }

}
