@extends('admin/master')

@section('title')
Company List
@endsection

@section('content')
<h1>Company List </h1>
<br><br>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Logo</th>
            <th>Company Name</th>
            <th>Company type</th>
            <th>owner</th>
            <th>Email</th>
            <th>Web</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
        @foreach($companies as $company)
          <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $company->logo }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->companytype->name }}</td>
            <td><a href="{{ route('admin.userinfo',$company->user->id) }}">{{ $company->user->name }}</a></td>
            <td>{{ $company->email }}</td>
            <td>{{ $company->web }}</td>
            <td>{{ $company->address }}</td>
            <td>
                   <a href="{{ route('admin.deletecompany',$company->id) }}" class="action text-danger"><i class="fas fa-trash" title="delete"></i></a>


                </td>
          </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection