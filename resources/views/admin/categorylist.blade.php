@extends('admin/master')

@section('title')
Category List
@endsection

@section('content')
<div class="container" style="min-height:550px">
    <h3 class="text-center my-3 font-weight-bold">Job Categoies List </h3><a href="" class="float-right">add new categories</a>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach($categories as $category)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $category->name }}</td>
                <td>
                 <a href="" class="btn btn-success">Detail</a>
                   <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                   <form action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are You Sure To Delete?')" class="d-inline-block" method="POST">
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
