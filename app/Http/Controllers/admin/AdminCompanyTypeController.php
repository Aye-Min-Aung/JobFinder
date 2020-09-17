<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CompanyType;


class AdminCompanyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $companytypes=CompanyType::all();
        return view('admin/companytypelist',compact('companytypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/addcompanytype');
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
            $companytype=new CompanyType;
            $companytype->name=$request->name;
            $companytype->save();

            return redirect()->route('companytypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyType $companyType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyType $companytype)
    {
        //
        return view('admin/editcompanytypes',compact('companytype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyType $companytype)
    {
        //
              $request->validate([
            'name'=>'required',

        ]);

        //data insert
            $companytype->name=$request->name;
            $companytype->save();

            return redirect()->route('companytypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyType  $companyType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyType $companytype)
    {
        //
         $companytype->delete();
        return redirect()->route('companytypes.index');
    }
}
