@extends('seeker/master')

@section('title')
 Job Detail
@endsection

@section('style')
<style>
    #job-detail{ 
	width: 100%; 
	height: 80vh;
	background: linear-gradient(to
	bottom,rgba(6,12,34,0.8),rgba(6,12,34,0.8)),
	url('{{ asset('seeker/img/job-detail.jpg')}}');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
 }
</style>
@endsection

@section('content')
<!--background image-->
{{-- <div class="container-fluid">
    <div id="job-detail">.
        <h1 class="text-light font-weight-bold display-4 text-center mt-5">Backend Developer</h1>
    </div>
</div> --}}
<div class="container-fluid">
    <img src="{{ asset('seeker/img/job-detail.jpg') }}" alt="" width="100%" style="height: 80vh;">
</div>

<!--background image-->
<div class="container my-5">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
            <div class="row mb-4">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 ">
                    <img src="{{ asset($job->company->logo) }}" alt="company logo" width="100px" height="100px">
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

                <tr>
                    <td colspan="2">
                        @role('Seeker')
                        <a href="{{ route('seeker.insert',$job->id) }}" class="btn btn-danger">Apply</a>        
                      @else
                        <a href="{{route('seekerlogin')}}" class="btn btn-danger mainfullbtncolor"> 
                          Login To Apply 
                        </a>
                      @endrole
                    </td>
                </tr>


                
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection