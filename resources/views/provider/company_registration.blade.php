@extends('provider/master')

@section('title')
Company Registration
@endsection

@section('content')
<div class="container">
	<h3 class="text-center my-3 font-weight-bold">Company Registration</h3>
	<div class="container">
		<form action="" method="post">
			@csrf
			<div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
                  <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="type" name="type">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Logo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control-file" id="logo" name="logo">
                  <input type="hidden" name="oldlogo" value="{{$company->logo}}">
                </div>
            </div>
            <div class="form-group row">
            	<label for="name" class="col-sm-2 col-form-label">Email</label>
            	<div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea name="address" id="address" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
            	<label for="name" class="col-sm-2 col-form-label">Web</label>
            	<div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary form-control">Register</button>
              </div>
            </div>
		</form>
	</div>
</div>
@endsection