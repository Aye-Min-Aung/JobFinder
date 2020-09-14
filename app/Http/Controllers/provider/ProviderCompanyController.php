<?php

namespace App\Http\Controllers\provider;

use App\Http\Controllers\Controller;
use App\Company;
use App\CompanyType;
use App\User;
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
        $types=CompanyType::all();
        $users=User::all();
        return view('provider/company_registration',compact('companies','types','users'));
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
            'type'=>'required',
            'logo'=>'required',
            'email'=>'required',
            'address'=>'required',
            'web'=>'required'
        ]);
       //if include file,upload file
        $imageName=time().'-'.$request->logo->extension();
        $request->logo->move(public_path('provider/companylogo'),$imageName);
        $path='provider/companylogo/'.$imageName;
        //data insert
            $company=new Company;
            $company->name=$request->name;
            $comapny->company_type=$request->type;
            $company->logo=$path;
            $company->user_id=1;
            $company->email=$request->email;
            $company->address=$request->address;
            $company->web=$request->web;

            $company->save();

            return redirect()->route('company.index');
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
    public function edit(Company $company)
    {
        //
         $companies=Company::all();
        $types=CompanyType::all();
        // $users=User::all();
        return view('provider/company_edit',compact('companies','types','company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Company $company)
    {
        //
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'logo'=>'sometimes',
            'oldlogo'=>'required',
            'email'=>'required',
            'address'=>'required',
            'web'=>'required'
        ]);
       //if include file,upload file
        if ($request->hasFile('logo')) {
        $imageName=time().'-'.$request->logo->extension();
        $request->logo->move(public_path('provider/companylogo'),$imageName);
        $path='provider/companylogo/'.$imageName;
    }
        else{
            $path=$request->oldlogo;
        }
        //data insert
           
            $company->name=$request->name;
            $comapny->company_type=$request->type;
            $company->logo=$path;
            $company->user_id=1;
            $company->email=$request->email;
            $company->address=$request->address;
            $company->web=$request->web;

            $company->save();

            return redirect()->route('company.index');
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
