@extends('admin/master')

@section('title')
Edit Nature
@endsection

@section('content')
<div class="container">
    <h3 class="text-center my-3 font-weight-bold">Edit</h3>
    <div class="container">
        <form action="{{ route('natures.update',$nature->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="name" name="name" value="{{ $nature->name }}">
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
