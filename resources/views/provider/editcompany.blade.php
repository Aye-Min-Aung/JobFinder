@extends('provider/master')

@section('title')
Edit Company
@endsection

@section('content')
<div class="container">
	<h3 class="text-center my-3 font-weight-bold">Edit Company</h3>
    <div class="container">
        <form action="{{ route('company.update',$company->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="oldphoto" id="" value="{{ $company->logo }}">

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }}">
                </div>
            </div>
            <div class="form-group row">
            	
            </div>
            <div class="form-group row">
        		<label for="logo" class="col-sm-2 col-form-label">Logo</label>
        		<div class="col-sm-6">
          			<input type="file" class="form-control-file" id="logo" name="logo"><br>
                <img src="{{ asset($company->logo) }}" alt="" width="100" height="100">
            </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" value="{{ $company->email }}">
                </div>
            </div>
            <div class="form-group row">
              <label for="type" class="col-sm-2 col-form-label">Type</label>
              <div class="col-sm-10">
                 <select class="form-control" name="type">
                @foreach($types as $type)
                  <option value="{{$type->id}}" @if($type->id==$company->company_type)
                    selected
                  @endif>{{$type->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea name="address" id="address" class="form-control">{{ $company->address }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="web" class="col-sm-2 col-form-label">Web</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="web" value="{{ $company->web }}">
                </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary form-control">Update</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
