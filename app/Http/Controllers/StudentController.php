<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $studentFilter=Student::paginate(10);
        return view('students.index',compact('studentFilter'));
    }
    
    public function destroy($id)
    {
        $record=Student::findOrFail($id);
        $record->delete();
        return back()->with('sucssed','Deleted');
    }
}
