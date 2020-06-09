<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @param Setting $model
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $model = Setting::find(1);
        return view('settings.index', compact('model'));
    }

    public function update(Request $request)
    {
        if (Setting::all()->count() > 0) {
            Setting::find(1)->update($request->all());
        } else {
            Setting::create($request->all());
        }
        return back();
    }

}
