@extends('layout.master')

@section('title')
Daftar Buku
@endsection

@section('content')

    <div class="row">
        @forelse ($book as $key=>$value)
        <div class="card text-bg-secondary mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{$value['cover']}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$value['title']}}</h5>
                        <p class="card-text">{{\Illuminate\Support\Str::limit($value['summary'], 150, $end='...')}}</p>
                        <p class="card-text">Author : {{$value['author']}}</p>
                        <p class="card-text">Tahun : {{$value['year']}}</p>
                        <p class="card-text">Genre : 
                        @foreach ($value['genre'] as $genre)
                            {{$genre}}
                        @endforeach
                    </p>
                        <p class="card-text"><small class="text-body-secondary">Rating : </small></p>
                        <form action="#" method="POST">
                        @csrf
                        <a href="#" class="btn btn-info">Show</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
                <p>Belum ada buku</p>
        @endforelse              
    </div>
@endsection