@extends('layout.master')

@section('title')
Formulir Buku
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="/admin/book/{{$book->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}">
                </div>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="author_id">Author</label>
                    <select class="form-control" id="author_id" name="author_id">
                        <option selected value="{{$book->author_id}}">{{$book->author->name}}</option>
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
                    <textarea rows="3" class="form-control" id="summary" name="summary" >{{$book->summary}}</textarea>
                </div>
                @error('summary')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="number" class="form-control" id="year" name="year" value="{{$book->year}}"></input>
                </div>
                @error('year')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                <label for="cover">Cover</label>
                    <div>
                    <img src="{{asset($book->cover)}}" class="img-thumbnail" alt="..." width="150px" >
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
