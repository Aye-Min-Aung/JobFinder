<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\JobNature;
use App\PostJob;
use Illuminate\Queue\Jobs\JobName;

class AdminNatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $natures=JobNature::all();
        return view('admin/naturelist',compact('natures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addnature');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',

        ]);

        //data insert
            $nature=new JobNature();
            $nature->name=$request->name;
            $nature->save();

            return redirect()->route('natures.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(JobNature $nature)
    {
        return view('admin/editnature',compact('nature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,JobNature $nature)
    {
        //
        $request->validate([
            'name'=>'required',

        ]);

        //data insert
            $nature->name=$request->name;
            $nature->save();

            return redirect()->route('natures.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobNature $nature)
    {
        $nature->delete();
        return redirect()->route('natures.index');
    }
}
