@extends('seeker/master')

@section('title')
@endsection

@section('style')
<style>
    ::-webkit-scrollbar {
    width: 0px;
    background: transparent;
    }
    .scrollarea{
        overflow-y: auto;
        height: 100vh;
    }
    
</style>
@endsection

@section('content')
<div class="container-fluid">
{{-- background image --}}
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('seeker/img/find-job.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Find Job Here</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('seeker/img/findjob.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Contact with provider </h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('seeker/img/4.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-shadow">Get a great work</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
{{-- end of background image --}}
<div class="container-fluid my-3">
    <div class="row">
        <!--column-3-->
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 border text-left scrollarea">
            <!--category-->
            <div class="p-3 my-3">
                <h4 class="mb-3 primary"> Job Category </h4> 
                <select class="form-control">
                    <option value="">all categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <!--job type-->
            <div class="p-3 my-3">
                <h4 class="mb-3 primary"> Job Natures </h4> 
                <select class="form-control">
                    <option value="">all natures</option>
                    @foreach($natures as $nature)
                        <option value="{{ $nature->id }}">{{ $nature->name }}</option>
                    @endforeach
                </select>
            </div>
            <!--Location-->
            {{-- <div class="p-3 my-1">
                <h4 class="mb-3 primary"> Job Location </h4> 
                <select class="form-control">
                    <option>Any Where</option>
                    <option> Category 1</option>
                    <option> Category 2</option>
                    <option> Category 3</option>
                </select>
            </div> --}}
            <!--experience-->
            <div class="p-3 my-3">
                <h4 class="mb-3 primary"> Experience </h4> 
                <select class="form-control">
                    <option value="0">0 year</option>
                    @for($i = 1; $i < 15; $i++)
                    <option value="{{ $i }}">{{ $i.' years'}}</option>
                    @endfor
                </select>
            </div>
            <!--Time of post-->
            {{-- <div class="p-3 my-1">
                <h4 class="mb-3 primary"> Post Within </h4> 
                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="any" name="any">
                  <label class="custom-control-label" for="any"> Any </label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="today" name="today">
                  <label class="custom-control-label" for="today"> Today</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="last-2" name="last-2">
                  <label class="custom-control-label" for="last-2"> Last 2 days</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="last-3" name="last-3">
                  <label class="custom-control-label" for="last-3"> Last 3 days</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="last-5" name="last-5">
                  <label class="custom-control-label" for="last-5"> Last 5 days</label>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" id="last-10" name="last-10">
                  <label class="custom-control-label" for="last-10"> Last 10 days</label>
                </div>
            </div> --}}
            <!--salary level-->
            <div class="col-12 my-2"> 
                <h4 class="mb-3"> Salary Level</h4>
                <select class="form-control"> 
                    <option> All Salary Level</option>
                    <option>0-99999 Kyats</option>
                    <option>100000-249000 Kyats</option>
                    <option>250000-599999 Kyats</option>
                    <option>600000-1500000 Kyats</option>
                    <option> above 1500000</option>
                </select>
            </div>
            <!--search button-->
            <div class="col-12 my-5"> 
                <a href="" class="btn btn-danger mx-3">Search</a>
            </div>
        </div>
        {{-- Job Area --}}
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 border text-left scrollarea">
            <div class="my-2 p-2">
                @foreach($postjobs as $job)
                    
                
                <div class="list-group text-center">	
                    <div class="list-group-item list-group-item-action py-4">
                          <div class="row justify-content-center">
                              <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                  <img src="{{ asset($job->company->logo) }}" alt="" width="100px" height="100px">
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                  <p class="font-weight-bold">{{ $job->name }}</p>
                                  <span class="mx-2">{{ $job->company->name }}</span>
                                  <span class="mx-2">{{ $job->address }}</span>
                                  <span class="mx-2">{{ $job->salary .' MMK'}}</span>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
                                  <a href="{{ route('applyjobs.show',$job->id) }}" class="btn btn-success my-3">view</a>
                              </div>
                          </div>
                      </div>
                </div>
                
                @endforeach
                <!--list group-->
            </div>
        </div>
    </div>
</div>
</div>
@endsection