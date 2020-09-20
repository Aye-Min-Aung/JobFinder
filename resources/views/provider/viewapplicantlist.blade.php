@extends('provider.master')
@section('tilte')
@endsection
@section('content')
    <div class="container">
        <h4 class="text-center mt-2 text-danger">{{ $pjobs->name }}</h4>
        <h4>Applicant List</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>cv</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($appjobs as $appjob)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img src="{{ asset($appjob->jobseeker->photo) }}" alt="" width="50" height="50"></td>
                        <td><a href="">{{ $appjob->jobseeker->name }}</a></td>
                        <td>{{ $appjob->jobseeker->phone }}</td>
                        <td>{{ $appjob->jobseeker->email }}</td>
                        <td>{{ $appjob->jobseeker->address }}</td>
                        <td><a href="{{ asset($appjob->jobseeker->cv) }}" class="site-btn" target="_blank" download>Download CV</a>{{-- {{ $appjob->jobseeker->cv }} --}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection