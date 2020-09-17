@extends('admin/master')

@section('title')
CompanyType List
@endsection

@section('content')
<div class="container" style="min-height:550px">
    <h3 class="text-center my-3 font-weight-bold">CompanyTypes List </h3><a href="{{ route('companytypes.create') }}" class="float-right btn btn-outline-success">add new company types</a>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Company Type Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach($companytypes as $companytype)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $companytype->name }}</td>
                <td>
                   <a href="{{route('companytypes.edit',$companytype->id)}}" class="btn btn-warning">Edit</a>

                   <form action="{{route('companytypes.destroy',$companytype->id)}}" onsubmit="return confirm('Are You Sure To Delete?')" class="d-inline-block" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-info" type="submit">Delete</button>


                </form>
            </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
