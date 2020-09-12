<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    protected $fillable=[
    	'name','phone','email','photo','cv'
    ];

    public function applyjobs($value='')
      {
        return $this->hasMany('App\ApplyJob');
      }

      public function user($value='')
      {
        return $this->belongsTo('App\User');
      }

}
