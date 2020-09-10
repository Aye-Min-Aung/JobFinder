<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $fillable=[
    	'name','phone','email','photo','cv'
    ];
}
