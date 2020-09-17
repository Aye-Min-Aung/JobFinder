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

{{-- tab --}}
<div class="container">
  <h1 class="text-center font-weight-bold">Jobs</h1>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Job</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Applied Job</a>
    </li>
    
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
    </div>
  </div>
</div>
@endsection

