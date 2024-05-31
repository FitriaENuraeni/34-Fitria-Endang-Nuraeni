<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $author = Author::orderBy('name')->get();
        return view('author.index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
    		'name' => 'required|unique:authors',
    	]);
 
        Author::create([
    		'name' => $request->name,
    	]);
 
    	return redirect('/admin/author');
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $author = Author::find($id);
        return view('author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
    		'name' => 'required|unique:authors',
    	]);

        $author = Author::find($id);
        $author->name = $request->name;
        $author->update();
        return redirect('/admin/author');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $author = Author::find($id);
        $book = Book::where('author_id', $id)->delete();
        $author->delete();
        return redirect('/admin/author');
    }
}