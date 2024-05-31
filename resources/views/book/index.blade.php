@extends('layout.master')

@section('title')
Daftar Buku
@endsection

@section('content')

    <div class="row">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Year</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($books as $key=>$value)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td><img src="{{asset($value->cover)}}" class="img-thumbnail" alt="..." width="150px" ></td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->author->name}}</td>
                    <td>{{\Illuminate\Support\Str::limit($value->summary, 150, $end='...')}}</td>
                    <td>{{$value->year}}</td>
                    <td>
                        <form action="/admin/book/{{$value->id}}" method="POST">
                            @csrf
                            <a href="/admin/book/{{$value->id}}" class="btn btn-info my-1 btn-sm">Show</a>
                            <a href="/admin/book/{{$value->id}}/edit" class="btn btn-primary my-1 btn-sm">Edit</a>
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1 btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
                @empty
                <th scope="row" colspan="7">belum ada buku</th>
                @endforelse 
                </tbody>
            </table>
        </div>
    </div>
@endsection