<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use App\Models\DetailGenre;
use App\Models\Review;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::query()->get();
        $genre = Genre::query()->get();
        $detail_genre = DetailGenre::query()->get();
        $reviews = Review::query()->get();
        return view('welcome', compact('books','genre','detail_genre','reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

        return view('user.book', compact('book','reviews','genre','detail_genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
