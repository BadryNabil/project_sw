<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use Image;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $records=College::paginate(20);
     return view('colleges.index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('colleges.create');
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

            'name'          => 'required',
            'grade'         => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'body'          =>  'required',
            'university'   => 'required',
            'department'    =>'required'

        ];
        $messages = [
            'name.required'           => 'Name is required',
            'grade.required'            => 'Grade is required',
            'image.required'           => 'Image is required',
            'body.required'     => 'Body  is required',
            'university.required'    => 'University is required',
            'department.required'     => 'Department is required',
         ];

        $this->validate($request,$rules,$messages);
        $college=College::create($request->all());
        if ($request->hasFile('image'))
            {
            $image = $request->file('image');
            $destinationPath = public_path().'/uploads/colleges/images/';
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given
            $college->image = 'uploads/colleges/images/'.$name;
            $college->save();
          }

       
        return redirect(route('colleges.index'));
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
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
       {
           
        }



}
