@extends('provider/master')

@section('title')
Company Registration
@endsection

@section('content')
<div class="container">
	<h3 class="text-center my-3 font-weight-bold">Company Registration</h3>
	<div class="container">
		
      <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                   <select class="form-control" name="type">
                  @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Logo</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control-file" id="logo" name="logo">
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
            	<label for="web" class="col-sm-2 col-form-label">Web</label>
            	<div class="col-sm-10">
                  <input type="text" class="form-control" id="web" name="web">
                </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary form-control">Register</button>
              </div>
            </div>
            <p class="text-center">if you already have company, <a href="{{ route('postjobs.create') }}"> post job now</a></p>
		</form>
	</div>
</div>
@endsection