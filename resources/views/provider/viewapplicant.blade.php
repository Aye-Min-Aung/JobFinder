@extends('provider.master')

@section('title')
View Applicant
@endsection

@section('content')
<div class="container">
<h1 class="text-center font-weight-bold">Applicant</h1>
<table class="table">
    <thead>
        <tr>
            <th>no</th>
            <th>name</th>
            <th>company</th>
            <th>address</th>
            <th>action</th>
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
            <td><a href="{{ route('provider.viewapplicantlist',$postjob->id) }}">view applicants</a></td>
            
            
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection