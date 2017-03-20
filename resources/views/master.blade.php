<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
<nav class="navbar nav-fluid navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('dashboard') }}">Procurement Management System - PMS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('dashboard') }}"><i class="fa fa-tachometer fa-fw"></i> Dashboard <span class="sr-only">(current)</span></a></li>
<<<<<<< HEAD
        @if(Auth::check()) 
          @if(Auth::user()->admin == 1)
            <li><a href="{{route('admin-dashboard')}}">Admin Dashboard</a></li>
          @endif
        @endif
=======
{{--         <li><a href="#">Link</a></li>
 --}}        
>>>>>>> 893835052afc5d66954667b9ab55ddb1887c3b6a
      </ul>

      @if(Auth::check())
      <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs fa-fw"></i> Settings <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href=""><i class="fa fa-key fa-fw"></i> Change Password</a></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
        @yield('content')
        
        
        <script type="text/javascript" src="{{ asset('bootstrap/js/jquery-1.12.0.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
