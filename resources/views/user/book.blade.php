@extends('layout.user')

@section('content')
<div class="container-lg">
    <div class="media">
        <img src="{{asset($book->cover)}}" class="mr-3" alt="..." height="300">
        <div class="media-body">
            <h2 class="mt-0">{{$book->title}}</h2>
            <ol>
                <li>
                    <p>Author : {{$book->author->name}}</p>
                </li>
                <li>
                    <p>Summary : {{$book->summary}}</p>
                </li>
                <li>
                    <p>Tahun : {{$book->year}}</p>
                </li>
                <li>
                    <p>Genre : 
                        @forelse ($detail_genre as $key=>$detail)
                            @if($detail->book_id == $book->id)
                                @foreach ($genre as $key=>$item)  
                                    @if($detail->genre_id == $item->id)
                                        {{$item->name}}
                                    @endif
                                @endforeach
                            @endif
                        @empty
                        -
                        @endforelse
                    </p>
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
            </ol>
        </div>
    </div>

    @if(session()->get("isLogged"))
    <div>
        <form action="/review/{{ $book->id }}" method="POST">
        @csrf
        <div class="form-group">
            <textarea class="form-control" id="review" rows="3" name="review" placeholder="Tulis review buku disini"></textarea>
        </div>
        @error('review')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <input type="number" class="form-control" id="rating" name="rating" placeholder="Nilai buku dengan angka 1-5"></input>
        </div>
        @error('rating')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Tambah Review</button>
        </div>
        </form>
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5>Review<h5>
        </div>
        @forelse ($reviews as $key=>$review)
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            @for ($x = 0; $x < $review->rating; $x++)
                <i class="fas fa-star" style="color: #facc29;"></i>
            @endfor
            <p>{{$review->review}}</p>
            <footer class="blockquote-footer"><cite title="Source Title">{{$review->user->name}}</cite></footer>
            </blockquote>
        </div>
        @empty
        <div class="card-body">
            <p>Belum ada review</p>
        </div>
        @endforelse
    </div>
</div>
@endsection