<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>
  {{-- font awesome --}}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('provider/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('provider/css/modern-business.css') }}" rel="stylesheet">

  @yield('style')

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    
    <div class="container">
      <a class="navbar-brand" href="index.html">JOB FINDER</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Job
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="{{ route('postjobs.create') }}">post job</a>
              <a class="dropdown-item" href="{{ route('postjobs.index') }}">manage job</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Company
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="#">company registeration</a>
              <a class="dropdown-item" href="#">company management</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Applicant
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="#">view applicant</a>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">example</a>
          </li>
          @php
            $user = Auth::user();
            if($user){
              $username=$user->name;
            }else{
              $username="";
            }
          @endphp
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i>{{ $username }}</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">edit profile</a>
                <a class="dropdown-item" href="{{ route('customregister') }}">register</a>
                <a class="dropdown-item" href="{{ route('customlogin') }}">login</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                </a>

            </div>
        </li>
          
        </ul>
      </div>
    </div>
  </nav>



  <!-- Page Content -->
  <div style="min-height:80vh">
    @yield('content')
  </div>
 
  <!-- /.container -->

  <!-- Footer -->
  <footer class="sticky-bottom py-2 bg-dark ">
    
      <p class="m-0 text-center text-white">Copyright &copy; Your Website @php echo date('Y'); @endphp</p>
    
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('provider/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('provider/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- jquery cdn link --}}
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  @yield('script')

</body>

</html>
