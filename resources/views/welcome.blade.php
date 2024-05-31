@extends('layout.user')

@section('content')
    <div class="row justify-content-md-center">
        <div class="jumbotron" style = "background-image : url(images/readthebook.png); width:95%">
            <h1 class="display-4 text-white">ReadTheBooks</h1>
            <p class="lead text-white">Find your next favorite book here!</p>
            <hr class="my-4" style="background-color:grey">
            @if(session()->get("isLogged"))
                @if(session()->get("role") == "admin")
                <p class="text-white">Selamat datang Admin</p>
                <a class="btn btn-success btn-lg" href="/admin" role="button">Ke Halaman Admin</a>
                @else
                <p class="text-white">Selamat datang {{session()->get("userName")}}</p>
                @endif
            @else
            <p class="text-white">Masuk untuk menulis review buku</p>
            <a class="btn btn-success btn-lg" href="{{route('auth.login')}}" role="button">Sign In</a>
            @endif
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="row">
                @forelse ($books as $key=>$value)
                <div class="col-sm">
                    <div class="card" style="width: 20rem; height: 50rem">
                        <img src="{{$value->cover}}" class="card-img-top" alt="..." height="350">
                        <div class="card-body">
                            <h3>{{$value->title}}</h3>
                            <p class="card-text">{{\Illuminate\Support\Str::limit($value->summary, 150, $end='...')}}</p>
                            <p class="card-text">Author : {{$value->author->name}}</p>
                            <p class="card-text">Tahun : {{$value->year}}</p>
                            <p class="card-text">Genre : 
                                @foreach ($detail_genre as $key=>$detail)
                                    @if($detail->book_id == $value->id)
                                        @foreach ($genre as $key=>$item)  
                                            @if($detail->genre_id == $item->id)
                                                {{$item->name}}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </p>
                            <h4>Rating 
                                @if($value->count == 0)
                                    -
                                @else
                                <span class="badge bg-secondary">{{$value->sum/$value->count}}</span>          
                                @endif
                            </h4>
                        </div>
                        <div class="card-footer">
                                <a href="/book/{{$value->id}}" class="btn btn-info">Review</a>
                        </div>
                    </div>
                </div>
                @empty
                    <p>Belum ada buku</p>
                @endforelse 
            </div>             
        </div>
    </div>
@endsection