<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
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
    public function store(Request $request, string $id)
    {
        //
        $validated = $request->validate([
    		'review' => 'required',
            'rating' => 'required|digits:1',
    	]);


        Review::create([
    		'user_id' => session()->get("userId"),
            'book_id' => $id,
    		'review' => $request->review,
            'rating' => $request->rating,
    	]);

        return redirect('/book/'.$id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $books = Book::query()->get();
        $reviews = Review::where('user_id', $id) -> get();
        $user = User::find($id);
        return view('user.review', compact('books','reviews','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $review = Review::find($id);
        return view('user.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
    		'review' => 'required',
            'rating' => 'required|digits:1',
    	]);

        $review = Review::find($id);
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->update();

        return redirect("/review/".$review->user_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $review = Review::find($id);
        $review->delete();
        return redirect("/review/".$review->user_id);
    }
}
