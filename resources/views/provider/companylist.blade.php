@extends('provider/master')

@section('title')
My Companies
@endsection

@section('content')
<div class="container">
	<h3 class="text-center my-3 font-weight-bold">My Companies</h3>
	<a href="{{ route('company.create') }}" class="float-right">add new company</a>

	<div class="table-responsive" style="min-height: 100px;">
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Company Name</th>
                <th>Company Type</th>
                <th>Logo</th>
                <th>Email</th>
                <th>Address</th>
                <th colspan="3">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach($companies as $company)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->company_type }}</td>
                <td> <img src="{{asset($company->logo)}}" width="100" height="100"> </td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->address }}</td>
                <td colspan="3">
                    <a href="#" class="action text-danger"><i class="far fa-eye"></i></a>

                    <a href="#" class="action text-danger"><i class="far fa-edit"></i></a>

                    <a href="#" class="action text-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection