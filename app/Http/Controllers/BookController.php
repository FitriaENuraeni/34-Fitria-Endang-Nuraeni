<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use App\Models\DetailGenre;
use App\Models\Review;
use App\Models\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::orderBy('title')->get();
        $genre = Genre::query()->get();
        $detail_genre = DetailGenre::query()->get();
        return view('book.index', compact('books','genre','detail_genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        {
            $author = Author::orderBy('name')->get();
            return view('book.create',compact('author') );
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
    		'title' => 'required|unique:books',
            'author_id' => 'required',
            'summary' => 'required',
            'year' => 'required|digits:4',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
    	]);

        $imageName = time().'.'.$request->file('cover')->getClientOriginalName();
        $request->file('cover')->move(public_path('images'), $imageName);

        Book::create([
    		'title' => $request->title,
    		'author_id' => $request->author_id,
            'summary' => $request->summary,
            'year' => $request->year,
            'cover' => './images/'.$imageName,
    	]);

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $book = Book::find($id);
        $reviews = Review::where('book_id', $id) -> get();
        $genre = Genre::query()->get();
        $detail_genre = DetailGenre::query()->get();

        return view('book.show', compact('book','reviews','genre','detail_genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $book = Book::find($id);
        $author = Author::all();
        return view('book.edit', compact('book', 'author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
    		'title' => 'required',
            'author_id' => 'required',
            'summary' => 'required',
            'year' => 'required|digits:4',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg'
    	]);

        $book = Book::find($id);

        if($request->file('cover'))
        {
        $imageName = time().'.'.$request->file('cover')->getClientOriginalName();
        $request->file('cover')->move(public_path('images'), $imageName);
        $book->cover = './images/'.$imageName;
        }
 

        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->summary = $request->summary;
        $book->year = $request->year;
        $book->update();

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book = Book::find($id);
        $review = Review::where('book_id', $id)->delete();
        $book->delete();
        return redirect('/admin');
    }
}
