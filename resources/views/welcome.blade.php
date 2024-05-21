<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/sytle.css">
        <title>ReadTheBooks</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ReadTheBooks</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">My Reviews</a>
                </div>
            </div>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search by Title" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="jumbotron" style = "background-image : url(images/readthebook.png); width:95%">
                    <h1 class="display-4 text-white">ReadTheBook</h1>
                    <p class="lead text-white">Find your next favorite book here!</p>
                    <hr class="my-4" style="background-color:grey">
                    <p class="text-white">Masuk untuk menulis review buku</p>
                    <a class="btn btn-success btn-lg" href="#" role="button">Sign In</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="row">
                    @forelse ($book as $key=>$value)
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$value['cover']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3>{{$value['title']}}</h3>
                                <p class="card-text">{{\Illuminate\Support\Str::limit($value['summary'], 150, $end='...')}}</p>
                                <p class="card-text">Author : {{$value['author']}}</p>
                                <p class="card-text">Tahun : {{$value['year']}}</p>
                                <p class="card-text">Genre : 
                                    @foreach ($value['genre'] as $genre)
                                        {{$genre}}
                                    @endforeach
                                </p>
                                <form action="" method="POST">
                                    @csrf
                                    <a href="" class="btn btn-info">Review</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p>Belum ada buku</p>
                    @endforelse 
                </div>             
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->    
    </body>
</html>