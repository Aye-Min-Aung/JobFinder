@extends('admin/master')

@section('title')
Add New Nature
@endsection

@section('content')
<div class="container">
    <h3 class="text-center my-3 font-weight-bold">Add Nature</h3>
    <div class="container">
        <form action="{{ route('natures.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
              <div class="col-sm-5">
                <button type="submit" class="btn btn-secondary form-control">Create</button>
              </div>
            </div>
          </form>
    </div>
</div>
@endsection
