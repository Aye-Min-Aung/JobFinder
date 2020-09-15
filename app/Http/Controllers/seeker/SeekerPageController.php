<?php

namespace App\Http\Controllers\seeker;

use App\ApplyJob;
use App\Http\Controllers\Controller;
use App\JobCategory;
use App\PostJob;
use Illuminate\Http\Request;

class SeekerPageController extends Controller
{
    public function login($value='')
    {
    	return view('seeker.login');
    }

    public function register($value='')
    {
    	return view('seeker.register');
    }

    public function home(){
        $categories=JobCategory::all();
        return view('seeker.home',compact('categories'));
    }
    public function insert($id){
        $job=PostJob::find($id);
        $user_id=1;

        $applyjob=new ApplyJob;
        $applyjob->post_job_id=$job->id;
        $applyjob->job_seeker_id=$user_id;
        $applyjob->apply_date=date('Y-m-d');
        $applyjob->save();
        return back();
    }

    public function viewapplyjob(){
        return view('seeker.viewapplyjob');
    }
}
