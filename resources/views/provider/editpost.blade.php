@extends('provider/master')

@section('title')
Post Job
@endsection



@section('content')
<div class="container">
    <h3 class="text-center my-3 font-weight-bold">Edit Job</h3>
    <div class="container">
        <form action="{{ route('postjobs.update',$job->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="{{ $job->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <textarea name="address" id="address" class="form-control">{{ $job->address }}</textarea>
                </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-sm-2 col-form-label">Job Category</label>
              <div class="col-sm-10">
                <select class="custom-select" name="category">
                  @foreach($categories as $key => $category)
                    <option value="{{ $category->id }}" @if ($category->id==$job->category_id)
                      selected
                  @endif>{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-sm-2 col-form-label">Job Nature</label>
              <div class="col-sm-10">
                <select class="custom-select" name="nature">
                  @foreach($natures as $key => $nature)
                    <option value="{{ $nature->id }}" @if ($nature->id==$job->nature_id)
                      selected
                  @endif>{{ $nature->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="address" class="col-sm-2 col-form-label">Company</label>
              <div class="col-sm-10">
                <select class="custom-select" name="company_id">
                  @foreach($companies as $company)
                    <option value="{{ $company->id }}"@if ($company->id==$job->company_id)
                        selected
                    @endif>{{ $company->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="salary" class="col-sm-2 col-form-label">Salary</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="salary" name="salary" placeholder="500000" value="{{ $job->salary }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="pskill" class="col-sm-2 col-form-label">Primary Skill</label>
              <div class="col-sm-10">
                <textarea name="pskill" id="pskill" class="form-control">{{ $job->primary_skill }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="sskill" class="col-sm-2 col-form-label">Secondary Skill</label>
              <div class="col-sm-10">
                <textarea name="sskill" id="sskill" class="form-control">{{ $job->secondary_skill }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="experience" class="col-sm-2 col-form-label">Experience</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="experience" name="experience" value="{{ $job->experience }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="descrition" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control">{{ $job->description }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-2"></div>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-secondary form-control">Update Job</button>
              </div>
            </div>
          </form>
    </div>
</div>
@endsection
