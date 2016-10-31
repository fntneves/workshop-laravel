<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

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
    public function store(Request $request, $restaurantId)
    {
        //
    }
}
