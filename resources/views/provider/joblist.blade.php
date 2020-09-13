@extends('provider/master')

@section('title')
Jobs List
@endsection

@section('style')
<style>
    /* .action {
        display: none;
        }

        tr:hover .action {
        display: inline;
        } */
</style>
@endsection

@section('content')
<div class="container">
    <h3 class="text-center my-3 font-weight-bold">Job List </h3><a href="{{ route('postjobs.create') }}" class="float-right">add new job</a>
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
                    <a href="{{ route('postjobs.show',$job->id) }}" class="action text-danger"><i class="far fa-eye"></i></a>

                    <a href="{{ route('postjobs.edit',$job->id) }}" class="action text-danger"><i class="far fa-edit"></i></a>

                    <a href="{{ route('postjobs.delete',$job->id) }}" class="action text-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

