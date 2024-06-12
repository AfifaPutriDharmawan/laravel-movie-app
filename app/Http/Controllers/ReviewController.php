<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Movie;
use App\Http\Controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews/index', compact('reviews'));
    }

        public function create()
    {
        $movies = Movie::all();
        return view('reviews.create', compact('movies'));
    }

        public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        Review::create($validatedData);

        return redirect('/reviews')->with('success', 'Review added successfully!');
    }

    public function edit(Review $movie)
    {
        $genres = Review::all();
        return view('reviews.edit', compact('review', 'reviews'));
    }

    public function update(Request $request, Reviews $review)
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);

        $genre->update($validatedData);

        return redirect('/review')->with('success', 'Review updated successfully!');
    }

        public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews')->with('success', 'Review deleted successfully!');
    }
}