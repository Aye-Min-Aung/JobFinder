@extends('admin/master')

@section('title')
Edit Company Types
@endsection

@section('content')
<div class="container">
    <h3 class="text-center my-3 font-weight-bold">Edit CompanyType</h3>
    <br><br>
    <div class="container">
        <form action="{{ route('companytypes.update',$companytype->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="name" name="name" value="{{ $companytype->name }}">
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
