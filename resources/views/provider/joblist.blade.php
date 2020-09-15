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
    <h3 class="text-center my-3 font-weight-bold">Approved Job List </h3><a href="{{ route('postjobs.create') }}" class="float-right">add new job</a>
    <div class="table-responsive" style="min-height: 100px;">
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
<hr>
    <h3 class="text-center font-weight-bold text-danger">Pending Job List</h3>
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
                  $j=1;
              @endphp
          @foreach($pjobs as $pjob)
            <tr>
              <td>{{ $j++ }}</td>
              <td>{{ $pjob->name }}</td>
              <td>{{ $pjob->company->name }}</td>
              <td>{{ $pjob->experience }}</td>
              <td>{{ $pjob->salary }}</td>
              <td colspan="3">
                  <a href="{{ route('postjobs.show',$pjob->id) }}" class="action text-danger"><i class="far fa-eye"></i></a>

                  <a href="{{ route('postjobs.edit',$pjob->id) }}" class="action text-danger"><i class="far fa-edit"></i></a>

                  <a href="{{ route('postjobs.delete',$pjob->id) }}" class="action text-danger"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          @endforeach
          </tbody>
      </table>
  </div>
</div>
@endsection

