@extends('provider.master')

@section('title')
View Applicant
@endsection

@section('content')
<div class="container">
<h1>Applicant</h1>
<table class="table">
    <thead>
        <tr>
            <td>no</td>
            <td>name</td>
            <td>company</td>
            <td>address</td>
            <td>seeker name</td>
            <td>apply date</td>
            
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach($postjobs as $postjob)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $postjob->name }}</td>
            <td>{{ $postjob->company->name }}</td>
            <td>{{ $postjob->address }}</td>
            <td>{{ $postjob->job_seeker_id }}</td>
            <td>{{ $postjob->apply_date }}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection