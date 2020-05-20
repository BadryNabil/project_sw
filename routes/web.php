<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('logout',function () {
  auth()->guard()->logout();
  return redirect('login');
});

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::resource('students','StudentController');
Route::resource('users','UserController');
Route::resource('contacts' ,'feedbackController');
Route::resource('colleges','CollegeController');
Route::resource('settings' ,'SettingController');
Route::get('change-password','UserController@resetPassword');
Route::post('change-password','UserController@resetPasswordSave');
