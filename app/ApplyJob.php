<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
    protected $fillable=[
    	'post_job_id','job_seeker_id','apply_date'
    ];

    public function jobseeker($value='')
      {
        return $this->belongsTo('App\JobSeeker');
      }

      public function postjob($value='')
      {
        return $this->belongsTo('App\PostJob');
      }
}
