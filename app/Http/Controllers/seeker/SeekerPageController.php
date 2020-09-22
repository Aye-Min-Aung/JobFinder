<?php

namespace App\Http\Controllers\seeker;

use App\ApplyJob;
use App\Company;
use App\Http\Controllers\Controller;
use App\JobCategory;
use App\JobSeeker;
use App\PostJob;
use App\JobNature;
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

    public function contact($value='')
    {
        return view('seeker.contact');
    }


    public function home(){
        $categories=JobCategory::take(8)->get();
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
        $seeker=JobSeeker::where('user_id',$user_id)->get();
        $applyjobs=ApplyJob::where('job_seeker_id',$seeker[0]->id)->get();
        return view('seeker.viewapplyjob',compact('applyjobs'));
    }

    public function deleteapplyjob($id)
    {
        $applyjob=ApplyJob::find($id);
        $applyjob->delete();
        return back();
    }

    public function editprofile($id){
        $seeker=JobSeeker::where('user_id',$id)->get();
        return view('seeker.editprofile',compact('seeker'));
    }

    public function updateprofile(Request $request,$id){
        if ($request->hasFile('photo')) {
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('seeker/photoimg'),$imageName);
        $photopath = 'seeker/photoimg/'.$imageName;
        }else{
            $photopath=$request->oldphoto;
        }

        if ($request->hasFile('cv'))
        {
            $extension=$request->cv->extension();
            if($extension=='pdf'){
                $cvName = time().'.'.$request->cv->extension();
                $request->cv->move(public_path('seeker/cvimg'),$cvName);
                $cvpath = 'seeker/cvimg/'.$cvName;
            }else{
                return back()->with('alert', 'Choose only pdf!');
            }
        }else{
            $cvpath=$request->oldcv;
        }
        $seeker=JobSeeker::find($id);
        $seeker->name=$request->name;
        $seeker->email=$request->email;
        $seeker->phone=$request->phone;
        $seeker->address=$request->address;
        $seeker->photo=$photopath;
        $seeker->cv=$cvpath;
        $seeker->save();
        return redirect()->route('seeker.home');
    }

    public function filterbycat($id)
    {   
        $catid=$id;
        if($catid==0){
            return redirect()->route('applyjobs.index');
        }else{

        $categories=JobCategory::all();
        $natures=JobNature::all();
        $postjobs=PostJob::where('category_id',$catid)
                            ->where('status','1')
                            ->get();
        return view('seeker.filterbycategory',compact('postjobs','natures','categories','catid'));
        }
    }

    public function filterbynature($id)
    {   
        $natid=$id;
        if($natid==0){
            return redirect()->route('applyjobs.index');
        }else{

        $categories=JobCategory::all();
        $natures=JobNature::all();
        $postjobs=PostJob::where('nature_id',$natid)
                            ->where('status','1')
                            ->get();
        return view('seeker.filterbynature',compact('postjobs','natures','categories','natid'));
        }
    }

    public function filterbyexp($id)
    {   
        $expid=$id;
        if($expid==0){
            return redirect()->route('applyjobs.index');
        }elseif($expid==1){
            $postjobs=PostJob::where('experience','<','3')
                            ->where('status','1')
                            ->get();
        }elseif($expid==2){
            $postjobs=PostJob::where('experience','>=','3')
                            ->where('experience','<','6')
                            ->where('status','1')
                            ->get();
        }elseif($expid==3){
            $postjobs=PostJob::where('experience','>=','6')
                            ->where('experience','<','9')
                            ->where('status','1')
                            ->get();
        }else{
            $postjobs=PostJob::where('experience','>=','9')
                            ->where('status','1')
                            ->get();
        }

        $categories=JobCategory::all();
        $natures=JobNature::all();
        
        return view('seeker.filterbyexperience',compact('postjobs','natures','categories','expid'));
        
    }

    public function filterbysal($id)
    {   
        $salid=$id;
        if($salid==0){
            return redirect()->route('applyjobs.index');
        }elseif($salid==1){
            $postjobs=PostJob::where('salary','<','500000')
                            ->where('status','1')
                            ->get();
        }elseif($salid==2){
            $postjobs=PostJob::where('salary','>=','500000')
                            ->where('salary','<','1000000')
                            ->where('status','1')
                            ->get();
        }elseif($salid==3){
            $postjobs=PostJob::where('salary','>=','1000000')
                            ->where('salary','<','1500000')
                            ->where('status','1')
                            ->get();
        }else{
            $postjobs=PostJob::where('salary','>=','1500000')
                            ->where('status','1')
                            ->get();
        }
        $categories=JobCategory::all();
        $natures=JobNature::all();
        return view('seeker.filterbysalary',compact('postjobs','natures','categories','salid'));
        
    }


    public function filterbyname($id)
    {   
        $name=$id;
        $postjobs=PostJob::where('name','like','%'.$name.'%')->get();
        $categories=JobCategory::all();
        $natures=JobNature::all();
        return view('seeker.filterbyname',compact('postjobs','natures','categories','name'));
        
    }
}