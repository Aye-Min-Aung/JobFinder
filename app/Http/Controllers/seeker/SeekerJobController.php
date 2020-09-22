<?php

namespace App\Http\Controllers\seeker;

use App\ApplyJob;
use App\Http\Controllers\Controller;
use App\JobCategory;
use Illuminate\Http\Request;
use App\JobSeeker;
use App\PostJob;
use App\JobNature;
use Illuminate\Support\Facades\Auth;
class SeekerJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $categories=JobCategory::all();
        $natures=JobNature::all();
        
        $postjobs=PostJob::where('status','1')->get();
        return view('seeker/findjob',compact('postjobs','categories','natures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(Auth::user()){
            $user_id=Auth::user()->id;
            $seeker=JobSeeker::where('user_id',$user_id)->get();
            $seeker_id=$seeker[0]->id;
            $applyjobs=ApplyJob::where('job_seeker_id',$seeker_id)
                                ->where('post_job_id',$id)
                                ->get();
            
        }else{
            $applyjobs="";
        }
        $job=PostJob::find($id);
        return view('seeker/jobdetail',compact('job','applyjobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
