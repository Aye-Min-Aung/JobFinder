@extends('seeker.master')

@section('title')
Contact Page
@endsection

@section('content')

        <div class="contact">
        </div>
<div class="container">
        <div class="row my-5">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3" >
          <form>
            <input type="text" name="" placeholder="Name" class="form-control form-group">
          <input type="text" name="" placeholder="Email" class="form-control form-group">
          <textarea class="form-control form-group"></textarea>
          <button class="btn btn-outline-secondary">Send Message</button>
          </form>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3" >
          <div class="row"> 
            <div class="col-12">
              <div class="row">
                <div class="col-2">
                  <i class="icofont-home" style="font-size: 35px"></i>
                </div>
                <div class="10">
                  <p>Yangon No.37/ Quarter , <br>Between Hantharwaddy and Kyun Road </p>

                </div>
              </div>
            </div>
          </div>
          <div class="row"> 
            <div class="col-12">
              <div class="row">
                <div class="col-2">
                  <i class="icofont-ui-touch-phone" style="font-size: 35px"></i>
                </div>
                <div class="10">
                  <p>+95 9123456789 <br> Mon to Fri 9am to 6pm</p>

                </div>
              </div>
            </div>
          </div>
          <div class="row"> 
            <div class="col-12">
              <div class="row">
                <div class="col-2">
                  <i class="icofont-email" style="font-size: 35px"></i>
                </div>
                <div class="10">
                  <p>example@email.com <br> any time</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
          <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7636.589092555709!2d96.10572963953017!3d16.86131786523728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195020a98965d%3A0x4c0901e2697742ff!2sSunny%20Hill%20Caf%C3%A9%20%26%20Bakery!5e0!3m2!1sen!2smm!4v1596146321640!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
    </div>
    </div>

@endsection

@section('style')
<style>
	.navbar-brand{
 	margin-right: 10%;
 }
	.contact{
	width: 100%; 
	height: 50vh;
	background:url(../image/contactus.jpg);
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
.map-responsive{
 	overflow:hidden;
 	padding-bottom: 50%;
 	position: relative;
 	height: 0;
 }
 .map-responsive iframe{
 	left: 0;
 	top:0;
 	height: 100%;
 	width:100%;
 	position: absolute;
 }
</style>
@endsection