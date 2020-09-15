@extends('admin/master')

@section('title')
Edit Category
@endsection

@section('content')
<div class="container">
    <h3 class="text-center my-3 font-weight-bold">Edit Category</h3>
    <br><br>
    <div class="container">
        <form action="{{ route('categories.update',$category->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
              <div class="col-sm-5">
                <button type="submit" class="btn btn-secondary form-control">Edit</button>
              </div>
            </div>
          </form>
    </div>
</div>
@endsection
