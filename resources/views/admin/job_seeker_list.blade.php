@extends('admin/master')

@section('title')
Job Seeker List
@endsection

@section('content')
<div class="container">
    <h3 class="text-center my-3 font-weight-bold">JobSeekers List </h3><a href="" class="float-right">add new jobseekers</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>JobSeeker Name</th>
                <th>Photo</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>CV</th>
                <th colspan="3">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach($seekers as $seeker)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $seeker->name }}</td>
                <td><img src="{{asset($seeker->photo) }}" height="50px" width="50px"></td>
                <td>{{ $seeker->phone }}</td>
                <td>{{ $seeker->email }}</td>
                <td>{{ $seeker->address }}</td>
                 <td>{{ $seeker->cv}}</td>
                <td colspan="3">
                    <a href="" class="action text-danger"><i class="far fa-eye"></i></a>

                    <a href="" class="action text-danger"><i class="far fa-edit"></i></a>

                    <a href="" class="action text-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection