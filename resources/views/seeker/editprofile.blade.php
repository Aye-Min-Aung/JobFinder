@extends('seeker.master')

@section('title')
Edit Profile
@endsection

@section('content')

<div class="container mt-2">
  <h1 class="mb-5">Edit Profile</h1>

  <form action="{{ route('seeker.updateprofile',$seeker[0]->id) }}" method="POST" enctype="multipart/form-data">
    
      @csrf
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="{{ $seeker[0]->name }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" id="phone" value="{{ $seeker[0]->phone }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" id="email" value="{{ $seeker[0]->email }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Adress</label>
        <div class="col-sm-10">
          <textarea name="address" id="address" class="form-control">{{ $seeker[0]->address }}</textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-10">
          <input type="file" name="photo" class="form-control-form" id="photo">
          <input type="hidden" name="oldphoto" value="{{ $seeker[0]->photo }}">
          <img src="{{ asset($seeker[0]->photo) }}" width="100px" height="100px" class="img-fluid" alt="you have no photo">
        </div>
      </div>
      <div class="form-group row">
        <label for="cv" class="col-sm-2 col-form-label">CV Form</label>
        <div class="col-sm-10">
          <input type="file" name="cv" class="form-control-form" id="cv">
          @if (session('alert'))
    <div class="alert alert-success text-danger">
        {{ session('alert') }}
    </div>
@endif
          <input type="hidden" name="oldcv" value="{{ $seeker[0]->cv }}">
          {{-- <embed src="{{ asset($seeker[0]->cv) }}" width="100px" height="100px" /> --}}
          <img src="{{ asset('seeker/cvimg/pdf.png') }}" width="100px" height="100px" class="img-fluid">
          @if($seeker[0]->cv)
          <input type="text" name="" value="{{ $seeker[0]->cv }}" style="border:none; width:400px;">
          @else
          <input type="text" name="" value="no cv" style="border:none; width:400px;">
          @endif
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </div>
    </form>
  
</div>
@endsection