<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Rating;
use App\Http\Requests\CreateRatingRequest;

class RatingsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurantId)
    {
        // findOrFail() will stop application and return a 404 if restaurant
        // does not exist.
        $restaurant = Restaurant::findOrFail($restaurantId);

        // Return view to client. View receives parameter $restaurant
        return view('ratings.create', ['restaurant' => $restaurant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRatingRequest $request, $restaurantId)
    {
        // Form is valid at this point due to CreateRatingRequest.

        $restaurant = Restaurant::findOrFail($restaurantId);

        $rating = new Rating;
        $rating->score = $request->input('value');
        $rating->comment = $request->input('comment');

        // Associate rating with the restaurant.
        // Now, rating belongs to the restaurant
        $rating->restaurant()->associate($restaurant);

        // Save to database
        $rating->save();

        return $rating;

    }
}
