@extends('layout.user')

@section('content')
<div class="row">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Review</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($reviews as $key=>$review)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td><img src="{{asset($review->book->cover)}}" class="img-thumbnail" alt="..." width="100px" ></td>
                    <td>{{$review->book->title}}</td>
                    <td>{{$review->review}}</td>
                    <td>{{$review->rating}}</td>
                    <td>
                        <form action="/review/{{$review->id}}" method="POST">
                            @csrf
                            <a href="/review/{{$review->id}}/edit" class="btn btn-primary my-1 btn-sm">Edit</a>
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1 btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
                @empty
                <th scope="row" colspan="7">belum ada review</th>
                @endforelse 
                </tbody>
            </table>
        </div>
    </div>
@endsection