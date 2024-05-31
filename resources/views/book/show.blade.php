@extends('layout.master')

@section('title')
Detail Buku
@endsection

@section('content')
<div class="media">
  <img src="{{asset($book->cover)}}" class="mr-3" alt="..." width="300">
  <div class="media-body">
    <h2 class="mt-0">{{$book->title}}</h2>
    <ol>
            <li>
                <p>Judul : {{$book->title}}</p>
            </li>
            <li>
                <p>Ringkasan : {{$book->summary}}</p>
            </li>
            <li>
                <p>Tahun : {{$book->year}}</p>
            </li>
            <li>
                <p>Author : {{$book->author->name}}</p>
            </li>
            <li>
                <p class="card-text">Rating : 
                    @if($book->count == 0)
                        -
                    @else
                        {{$book->sum/$book->count}}
                    @endif
                </p>
            </li>
            <li>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p>Genre : 
                                <ul>
                                    @forelse ($detail_genre as $key=>$detail)
                                        @if($detail->book_id == $book->id)
                                            @foreach ($genre as $key=>$item)  
                                                @if($detail->genre_id == $item->id)
                                                <li>
                                                    <p>
                                                        <form class="form-inline" action="/admin/detail/{{$detail->id}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <label class="my-1 mr-2" for="deleteGenre">{{$item->name}}</label>
                                                            <input type="submit" class="btn btn-danger my-1 btn-sm" id="deleteGenre" value="Delete">
                                                        </form>
                                                    </p>
                                                </li>                                
                                                @endif
                                            @endforeach
                                        @endif
                                    @empty
                                    <p>Tidak ada genre</p>
                                    @endforelse
                                </ul>
                            </p>                
                        </div>
                        <div class="col">
                            <form action="/admin/detail/{{ $book->id }}" method="POST">
                                @csrf
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                <select class="custom-select mr-sm-2" id="genre_id" name="genre_id" aria-label="Default select example">
                                    <option selected>Pilih Genre</option>
                                    @foreach ($genre as $key=>$item)  
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                    @error('genre_id')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-auto my-1">
                                    <button class="btn btn-primary" type="submit">Tambah Genre</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
        </ol>
    </div>
</div>



    
</div>

@endsection
