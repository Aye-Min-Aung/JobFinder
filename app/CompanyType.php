<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    protected $fillable = [
        'name'
      ];

      public function companies($value='')
      {
        return $this->hasMany('App\Company');
      }

      
}
