@extends('layout.master')

@section('title')
Daftar Buku
@endsection

@section('content')

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
@endsection