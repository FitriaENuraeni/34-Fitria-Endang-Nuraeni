<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use App\Models\DetailGenre;
use App\Models\Review;

class DetailController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
    		'genre_id' => 'required',
    	]);
 
        DetailGenre::create([
            'book_id' => $id,
    		'genre_id' => $request->genre_id,
    	]);
 
    	return redirect('/admin/book/'.$id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $detail_genre = DetailGenre::find($id);
        $book_id = $detail_genre->book_id;
        $detail_genre->delete();
        return redirect('/admin/book/'.$book_id);
    }
}
