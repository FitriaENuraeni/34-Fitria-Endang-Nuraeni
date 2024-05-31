@extends('layout.user')

@section('content')

<div>
        <form action="/review/{{ $review->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <textarea class="form-control" id="review" rows="3" name="review" >{{ $review->review }}</textarea>
        </div>
        @error('review')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <input type="number" class="form-control" id="rating" name="rating" value="{{ $review->rating }}"></input>
        </div>
        @error('rating')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Edit Review</button>
        </div>
        </form>
    </div>
@endsection