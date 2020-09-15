<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name','company_type','user_id','logo','email','address',
        'web'
    ];

    public function companytype($value='')
      {
        return $this->belongsTo('App\CompanyType','company_type');
      }

      public function postjobs($value='')
      {
        return $this->hasMany('App\Company');
      }

      public function user($value='')
      {
        return $this->belongsTo('App\User','user_id');
      }
}
