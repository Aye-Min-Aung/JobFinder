<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\PostJob;
use App\Company;
use App\User;
use App\JobSeeker;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function dashboard(){
        $companies=Company::all();
        $appjobs=PostJob::where('status','1')->get();
        $unappjobs=PostJob::where('status','0')->get();
        return view('admin/dashboard',compact('companies','appjobs','unappjobs'));
    }

    public function company(){
        $companies=Company::all();
        return view('admin/companylist',compact('companies'));
    }

    public function job_seeker(){
        $seekers=JobSeeker::all();
        return view('admin/job_seeker_list',compact('seekers'));
    }

    public function appjoblist(){
        $jobs=PostJob::where('status','1')->get();
        return view('admin/approvedjoblist',compact('jobs'));
    }

    public function unappjoblist(){
        $jobs=PostJob::where('status','0')->get();
        return view('admin/unapprovedjoblist',compact('jobs'));
    }

    public function jobdetail($id){
        $job=PostJob::find($id);
        return view('admin/jobdetail',compact('job'));
    }

    public function deletejob($id){
        $job=PostJob::find($id);
        $job->delete();
        return back();
    }

    public function approvejob($id){
        $job=PostJob::find($id);

        $job->status='1';
        $job->save();
        return back();
    }
    public function unapprovejob($id){
        $job=PostJob::find($id);

        $job->status='0';
        $job->save();
        return back();
    }

    public function userinfo($id){
        $user=User::find($id);
        return view('admin/userinfo',compact('user'));
    }

     public function deletecompany($id)
    {
        //
        $company=Company::find($id);
        $company->delete();
        return back();
    }
     public function deleteseeker($id)
    {
        //
        $seeker=JobSeeker::find($id);
        $seeker->delete();
        return back();
    }
    
}
