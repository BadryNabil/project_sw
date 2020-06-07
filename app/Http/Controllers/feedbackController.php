<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class feedbackController extends Controller
{

    public function index()
    {
        $records=Contact::paginate(10);
        return view('contacts.index',compact('records'));
    }
    public function store(Request $request)
    {
      $rules = [
            'name'     => 'required',
            'phone'    =>'required|digits:11',
            'email'    =>'required|email',
            'message'  =>'required'
        ];
        $messages = [
            'name.required'    => 'Name is required',
            'phone.required'   => 'Phone is required',
            'email.required'   => 'Email is required',
            'message.required' => 'Message is required'
        ];
        $this->validate($request,$rules,$messages);
        $feedback=Contact::create($request->all());
        return back();
    }
    public function destroy($id)
    {
        $record=Contact::findOrFail($id);
        $record->delete();
        return back();
    }
}
