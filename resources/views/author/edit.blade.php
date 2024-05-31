@extends('layout.master')

@section('title')
Formulir Author
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">Edit Author</h5>
        <div class="card-body">
            <form action="/admin/author/{{$author->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama Author</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$author->name}}">
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