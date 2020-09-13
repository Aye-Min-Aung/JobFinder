<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name','logo','email','address',
        'web'
    ];

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
