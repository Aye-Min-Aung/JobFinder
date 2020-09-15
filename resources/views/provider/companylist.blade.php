@extends('provider/master')

@section('title')
My Companies
@endsection

@section('content')
<h4>My Companies</h4>
@foreach($companies as $company)
    {{  $company->name }}
@endforeach
@endsection