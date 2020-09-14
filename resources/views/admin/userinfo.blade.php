@extends('admin/master')

@section('title')
User Info
@endsection

@section('content')
<h1>User Infomation</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>

            </tr>
        </tbody>
    </table>
</div>
@endsection