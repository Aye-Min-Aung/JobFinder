@extends('seeker.master')

@section('title')
view applied job
@endsection

@section('content')
<div class="container">
    <h4 class="text-center">My Application</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Job Name</th>
                    <th>Apply Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applyjobs as $applyjob)
                @php
                    $i=1;
                @endphp
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><a href="{{ route('applyjobs.show',$applyjob->post_job_id) }}">{{ $applyjob->postjob->name }}</a></td>
                    <td>{{ $applyjob->apply_date }}</td>
                    <td><a href="{{ route('seeker.deleteapplyjobs',$applyjob->id) }}" class="btn btn-danger btn-small">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
