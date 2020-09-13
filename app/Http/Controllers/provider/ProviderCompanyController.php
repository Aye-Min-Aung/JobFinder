<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Company;
use Illuminate\Http\Request;

class ProviderCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::all();
        return view('provider/companylist',compact('companies'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Company::all();
        return view('provider/company_registration',compact('companies'));
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
            'logo'=>'required',
            'email'=>'required',
            'address'=>'required',
            'web'=>'required'
        ]);

        //data insert
            $company=new Company;
            $company->name=$request->name;
            $company->logo=
            $company->email=$request->email;
            $company->address=$request->address;
            $company->web=$request->web;

            $company->save();

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
        //
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
