<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StorTrac</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
 
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    
    <style>
        

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="auth-layout">
    
    @yield('content')

    <!-- JavaScripts -->
    <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
