@extends('layout.master')

@section('title')
Daftar Buku berdasarkan Genre
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">List Buku {{$genre->name}}</h5>
        <div class="card-body">
        <ol>
        @forelse ($book as $key=>$value)
            <li>
                <p>{{$value->title}}</p>
            </li>
        @empty
                <p>Tidak ada data buku</p>
        @endforelse     
        </ol>
        </div>
        <a href="/genre" class="btn btn-primary mb-3">Kembali</a>
    </div>
@endsection