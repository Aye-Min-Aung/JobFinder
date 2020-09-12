<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobNature extends Model
{
    protected $fillable = [
      'name'
    ];
    
    public function postjobs($value='')
      {
        return $this->hasMany('App\PostJob');
      }
}
