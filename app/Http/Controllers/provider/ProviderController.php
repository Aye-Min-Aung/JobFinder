<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ApplyJob;
use App\PostJob;
use Illuminate\Support\Facades\App;

class ProviderController extends Controller
{
    public function register(){
        return view('provider.register');
    }
    public function login(){
        return view('provider.login');
    }

    public function viewapplicant(){
        $user_id=Auth::user()->id;
        $postjobs=PostJob::where('user_id',$user_id)
                ->leftjoin('apply_jobs','post_jobs.id','=','apply_jobs.post_job_id')    
                ->get();
        return view('provider.viewapplicant',compact('postjobs'));
    }

}
