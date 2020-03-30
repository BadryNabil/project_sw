<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $records=Contact::paginate(10);
        return view('contacts.index',compact('records'));
    }
    

        
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record=Contact::findOrFail($id);
        $record->delete();
        return back();
    }
}
