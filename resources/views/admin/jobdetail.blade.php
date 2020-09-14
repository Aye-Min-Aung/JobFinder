@extends('admin/master')

@section('title')
 Job Detail
@endsection

@section('content')
<h4 class="text-center font-weight-bold py-4">Job Detail</h4>
<div class="container my-5">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="row mb-4">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 border">
                    <img src="image/c2.jpg" alt="company logo" width="100px" height="100px">
                </div>
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <p class="font-weight-bold">{{ $job->name }}({{ $job->jobcategory->name }})</p>
                    <span class="mx-2">{{ $job->company->name }}</span>
                    <span class="mx-2">{{ $job->address }}</span>
                    
                </div>          
            </div>
            <div class="row mb-2 ">
                <div class="col-12">
                    <h4 class="primary">Job Description</h4>
                    <p>{{ $job->description }}</p>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <h4 class="primary">Primary Skill , Secondary Skill and experience</h4>
                    <ul class="">
                        <li>{{ $job->primary_skill }}</li> 
                        <li>{{ $job->secondary_skill }}</li>
                        <li>{{ $job->experience }}year</li>
                    </ul>
                    
                </div>
            </div>
            <div class="row"> 
                <div class="col-7">
                    <h4 class="primary mb-4">Company's information</h4>
                    <table class="table">
                        <tr>
                            <th>Name:</th>
                            <td>{{ $job->company->name }}</td>
                        </tr>
                        <tr>
                            <th>Web:</th>
                            <td>{{ $job->company->web }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $job->company->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="row"> 
                <div class="col-12 border p-4">
                    <table class="table">
                <tr>
                    <th colspan="2">
                        Job Overview 
                    </th>
                </tr>
                <tr>
                    <td>Posted Date </td>
                    <td> {{ $job->created_at }}</td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td> {{ $job->address }}</td>
                </tr>
                <tr>
                    <td>Job Nature</td>
                    <td> {{ $job->jobnature->name  }}</td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td> {{ $job->salary }} </td>
                </tr>
                
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection