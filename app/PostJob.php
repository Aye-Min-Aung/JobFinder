<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostJob extends Model
{
    protected $fillable = [
        'name','category_id','nature_id','company_id','address',
        'primary_skill','secondary_skill','experience','salary',
        'description'
    ];

    public function jobcategory($value='')
      {
        return $this->belongsTo('App\JobCategory');
      }

      public function jobnature($value='')
      {
        return $this->belongsTo('App\JobNature');
      }

      public function applyjobs($value='')
      {
        return $this->hasMany('App\ApplyJob');
      }

      public function company($value='')
      {
        return $this->belongsTo('App\Company');
      }


}
