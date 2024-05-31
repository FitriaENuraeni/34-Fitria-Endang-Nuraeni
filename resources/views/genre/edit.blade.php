@extends('layout.master')

@section('title')
Formulir Genre
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">Edit Genre</h5>
        <div class="card-body">
            <form action="/admin/genre/{{$genre->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$genre->name}}">
                </div>
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection