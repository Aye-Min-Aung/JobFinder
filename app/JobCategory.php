<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $fillable = [
      'name'
    ];
    
    public function postjobs($value='')
      {
        return $this->hasMany('App\PostJob','category_id');
      }
}
