<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/sytle.css">

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">

        <title>ReadTheBooks</title>
        @stack('style')
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">ReadTheBooks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                @if(session()->get("isLogged"))
                <a class="nav-link" href="/review/{{session()->get("userId")}}">My Reviews</a>
                @else
                <a class="nav-link disabled" href="/review/{{session()->get("userId")}}">My Reviews</a>
                @endif
                </div>
            </div>
            @if(session()->get("isLogged"))
                <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a>
            @else
                <a class="nav-link" href="{{ route('auth.loginPage') }}">Login</a>
                <a class="nav-link" href="{{ route('auth.registerPage') }}">Register</a>
            @endif
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        @stack('script')
    </body>
</html>


    