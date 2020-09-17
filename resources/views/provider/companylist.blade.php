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
                <th>Logo</th>
                <th>Company Name</th>
                <th>Company Type</th>
                <th>Email</th>
                <th>Web</th>
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
                <td> <img src="{{asset($company->logo)}}" width="100" height="100"> </td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->companytype->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->web }}</td>
                <td>{{ $company->address }}</td>
                <td colspan="3">
                    <a href="#" class="action text-danger"><i class="far fa-eye"></i></a>

                    <a href="{{ route('company.edit',$company->id) }}" class="action text-danger"><i class="far fa-edit"></i></a>

                    <a href="{{ route('company.delete',$company->id) }}" class="action text-danger"><i class="fas fa-trash"></i></a>

                    {{-- <form action="{{ route('company.destroy',$company->id) }}">
                      @csrf
                    @method('delete')
                    <input type="submit" name="" id="" value="delete">
                    </form> --}}
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection