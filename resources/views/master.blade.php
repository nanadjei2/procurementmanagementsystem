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

        
        @yield('content')
        
        
        <script type="text/javascript" src="{{ asset('bootstrap/js/jquery-1.12.0.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
