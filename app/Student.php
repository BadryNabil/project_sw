<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Student extends Model 
{

    protected $table = 'student';
    public $timestamps = true;
    protected $fillable = array('username', 'password', 'email', 'phone', 'city');

   
}