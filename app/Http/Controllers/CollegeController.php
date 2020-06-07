<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\College;
use Image;

class CollegeController extends Controller
{
    public function index()
    {
     $records=College::paginate(20);
     return view('colleges.index',compact('records'));
    }
    public function create()
    {
      return view('colleges.create');
    }
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
    public function edit($id)
    {
      $model=College::findOrFail($id);
      return view('colleges.edit',compact('model'));
    }
    public function update(Request $request, $id)
    {
      $record = College::findOrFail($id);
      $record->update($request->all());
      if ($request->hasFile('image'))
            {
            $image = $request->file('image');
            $destinationPath = public_path().'/uploads/colleges/images/';
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given
            $record->image = 'uploads/colleges/images/'.$name;
            $record->save();
          }
      return redirect(route('colleges.index',$record->id));
    }
     public function destroy($id)
       {

           $record = College::findOrFail($id);
           $record->delete();
           return back();
           
        }



}
