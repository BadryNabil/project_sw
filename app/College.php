<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class College extends Model 
{

    protected $table = 'college';
    public $timestamps = true;
    protected $fillable = array('name', 'grade', 'body', 'university' ,'department');

}