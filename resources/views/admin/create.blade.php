@extends('layout.master')

@section('title')
Formulir Buku
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Tulis judul buku disini!">
                </div>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="summary">Ringkasan</label>
                    <textarea rows="3" class="form-control" id="summary" name="summary" placeholder="Tulis ringkasan buku disini!"></textarea>
                </div>
                @error('summary')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="year">Tahun</label>
                    <input type="number" class="form-control" id="year" name="year" placeholder="Tulis tahun buku terbit disini"></input>
                </div>
                @error('year')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Tulis nama penulis disini"></input>
                </div>
                @error('author')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="cover">Cover</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Tulis link cover buku disini"></input>
                </div>
                @error('cover')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <select class="form-control" id="genre" name="genre">
                        <option selected>Genre</option>
                        @foreach ($genre as $key=>$value)
                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                        @endforeach
                    </select>
                </div>
                @error('genre')
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
</div>
