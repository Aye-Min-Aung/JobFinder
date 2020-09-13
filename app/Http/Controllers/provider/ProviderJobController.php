<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\JobCategory;
use App\JobNature;
use App\Company;
use App\PostJob;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\PseudoNode;

class ProviderJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $jobs=PostJob::all();
        return view('provider/joblist',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=JobCategory::all();
        $natures=JobNature::all();
        $companies=Company::all();
        return view('provider/postjob',compact('categories','natures','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // validate
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'category'=>'required',
            'nature'=>'required',
            'company_id'=>'required',
            'salary'=>'required',
            'experience'=>'required',
            'pskill'=>'required',
            'sskill'=>'required',
            'description'=>'required'
        ]);

        //data insert
            $job=new PostJob;
            $job->name=$request->name;
            $job->address=$request->address;
            $job->category_id=$request->category;
            $job->nature_id=$request->nature;
            $job->company_id=$request->company_id;
            $job->salary=$request->salary;
            $job->primary_skill=$request->pskill;
            $job->secondary_skill=$request->sskill;
            $job->experience=$request->experience;
            $job->description=$request->description;

            $job->save();

            return redirect()->route('postjobs.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job=PostJob::find($id);
        return view('provider/viewjob',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=PostJob::find($id);
        $categories=JobCategory::all();
        $natures=JobNature::all();
        $companies=Company::all();
        return view('provider/editpost',compact('job','categories','natures','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $job=PostJob::find($id);
        // validate
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'category'=>'required',
            'nature'=>'required',
            'company_id'=>'required',
            'salary'=>'required',
            'experience'=>'required',
            'pskill'=>'required',
            'sskill'=>'required',
            'description'=>'required'
        ]);

        //data insert
            
            $job->name=$request->name;
            $job->address=$request->address;
            $job->category_id=$request->category;
            $job->nature_id=$request->nature;
            $job->company_id=$request->company_id;
            $job->salary=$request->salary;
            $job->primary_skill=$request->pskill;
            $job->secondary_skill=$request->sskill;
            $job->experience=$request->experience;
            $job->description=$request->description;

            $job->save();

            return redirect()->route('postjobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=PostJob::find($id);
        $job->delete();
        return back();
        
    }
    public function delete($id){
        $job=PostJob::find($id);
        $job->delete();
        return redirect()->route('postjobs.index');
    }
}
