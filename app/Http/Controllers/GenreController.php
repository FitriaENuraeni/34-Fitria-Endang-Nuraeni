<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\DetailGenre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $genre = Genre::orderBy('name')->get();
        return view('genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
    		'name' => 'required|unique:genre',
    	]);
 
        Genre::create([
    		'name' => $request->name,
    	]);
 
    	return redirect('/admin/genre');
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
    		'name' => 'required|unique:genre',
    	]);

        $genre = Genre::find($id);
        $genre->name = $request->name;
        $genre->update();
        return redirect('/admin/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $genre = Genre::find($id);
        $detail_genre = DetailGenre::where('genre_id', $id)->delete();
        $genre->delete();
        return redirect('/admin/genre');
    }
}
