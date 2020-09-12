<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function companytype($value='')
      {
        return $this->belongsTo('App\CompanyType');
      }

      public function postjobs($value='')
      {
        return $this->hasMany('App\Company');
      }

      public function user($value='')
      {
        return $this->belongsTo('App\User');
      }
}
