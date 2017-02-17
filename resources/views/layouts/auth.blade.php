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
        <div class="container grid">
            <div class="row">
                <div class="col-md-4 move-center top-200" >
                    <img src="{{ asset('images/logo75pxw.png')}}" style="padding-bottom: 10px;" />
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- JavaScripts -->
        <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
