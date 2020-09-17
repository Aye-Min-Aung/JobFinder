<?php

namespace App\Http\Controllers\seeker;

use App\ApplyJob;
use App\Company;
use App\Http\Controllers\Controller;
use App\JobCategory;
use App\JobSeeker;
use App\PostJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user_id=Auth::user()->id;
        $seeker=JobSeeker::where('user_id',$user_id)->get();

        $applyjob=new ApplyJob;
        $applyjob->post_job_id=$job->id;
        $applyjob->job_seeker_id=$seeker[0]->id;
        $applyjob->apply_date=date('Y-m-d');
        $applyjob->save();
        return back();
    }

    public function viewapplyjob(){
        $user_id=Auth::user()->id;
        return view('seeker.viewapplyjob');
    }

    public function editprofile($id){
        $seeker=JobSeeker::where('user_id',$id)->get();
        return view('seeker.editprofile',compact('seeker'));
    }

    public function updateprofile(Request $request,$id){
        $seeker=JobSeeker::find($id);
        $seeker->name=$request->name;
        $seeker->email=$request->email;
        $seeker->phone=$request->phone;
        $seeker->address=$request->address;
        $seeker->photo=$request->photo;
        $seeker->cv=$request->cv;
        $seeker->save();
        return redirect()->route('seeker.home');
    }
}
