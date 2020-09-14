@extends('admin/master')

@section('title')
Unapprove Job
@endsection

@section('content')
<h4 class="text-center font-weight-bold my-3">Requested Job</h4>

<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Job Name</th>
                <th>Company Name</th>
                <th>Experience</th>
                <th>Salary</th>
                <th colspan="3">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach($jobs as $job)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $job->name }}</td>
                <td>{{ $job->company->name }}</td>
                <td>{{ $job->experience }}</td>
                <td>{{ $job->salary }}</td>
                <td colspan="3">

                    <a href="{{ route('admin.jobdetail',$job->id) }}" class="action text-danger"><i class="far fa-eye" title="view"></i></a>

                    <a href="{{ route('admin.approvejob',$job->id) }}" class="action text-danger"><i class="fas fa-thumbs-up" title="approve"></i></a>

                    <a href="" class="action text-danger"><i class="fas fa-trash" title="delete"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
