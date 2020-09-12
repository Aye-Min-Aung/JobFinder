<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function companytype($value='')
      {
        return $this->belongsTo('App\CompanyType');
      }

      public function user($value='')
      {
        return $this->belongsTo('App\User');
      }
}
