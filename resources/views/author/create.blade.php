@extends('layout.master')

@section('title')
Formulir Author
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="/admin/author" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Author</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tulis nama author disini!">
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
