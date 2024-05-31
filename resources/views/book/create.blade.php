@extends('layout.master')

@section('title')
Formulir Buku
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="/admin/book" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Tulis judul buku disini!">
                </div>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="author_id">Author</label>
                    <select class="form-control" id="author_id" name="author_id">
                        <option selected>Pilih Author</option>
                        @foreach ($author as $key=>$value)
                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                        @endforeach
                    </select>
                </div>
                @error('author_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="summary">Summary</label>
                    <textarea rows="3" class="form-control" id="summary" name="summary" placeholder="Tulis ringkasan buku disini!"></textarea>
                </div>
                @error('summary')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" class="form-control" id="year" name="year" placeholder="Tulis tahun buku terbit disini"></input>
                </div>
                @error('year')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                <label for="cover">Cover</label>
                    <div>
                    <input type="file" id="cover" name="cover">
                    </div>
                </div>
                @error('cover')
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
