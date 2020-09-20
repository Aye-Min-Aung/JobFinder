@extends('seeker.master')

@section('title')
home
@endsection

@section('style')
<style>
    #home{ 
	width: 100%; 
	height: 90vh;
	background: url('{{ asset('seeker/img/background.jpg')}}');
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
 }
 #heading1{
 	margin-top:10%;
 	margin-left:10%;
 	font-size: 5vw;
 }
 #search-area{
 	width:50%;
 }
  #search-area div{
 	margin-top: 3vh;
 }
 #top-categories{
 	width:70%;
 	margin:auto;
 }
 
 #top-categories div .custom-card{
 	border:1px solid #ddd;
 	margin-bottom: 10px;

 }
}
.custom-card{
	color:#28395a;
	background-color: transparent;
}
.custom-card:hover{
	color:#a32f2f;
	box-shadow: 3px 3px 3px #dbdbdb;
	background-color: white;
}
</style>
@endsection

@section('content')
<!--background image-->
<div id="home">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-12 col-12">
                <h1 class="text-capitalize primary font-weight-bold" id="heading1">Find The Most Exciting Startup Job</h1>
            </div>
        </div>

        <div class="row mt-5 justify-content-center ml-3" id="search-area">
            <div class="col-xl-7 col-lg-5 col-md-12 col-sm-12 col-12">
                <input type="text" name="jname" class="form-control jname" id="search-box" placeholder="Enter Job Name">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                <button class=" btn btn-danger px-5 find">Find</button>
            </div>
        </div>
    </div>
</div>
<!--end of background image-->
        <!--end of background image-->

        <!--Top Categories-->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="primary text-center mt-5">Top Categories</h2>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center text-center mb-5" id="top-categories">
                @foreach($categories as $category)
                    
                
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 text-center">
                    <div class="custom-card p-2">
                        <img src="{{ asset('seeker/img/joblogo.jpg') }}" alt="" width="100" height="100">
                        <p>{{ $category->name }}</p>
                        <a href="{{ route('seeker.fcat',$category->id) }}" class="text-danger">({{ $category->postjobs->count() }})</a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        <!--End of Top Categories-->
@endsection
@section('script')
<script src="{{ asset('seeker/js/seeker.js') }}"></script>
@endsection