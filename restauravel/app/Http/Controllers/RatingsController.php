<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRatingRequest;
use App\Restaurant;
use App\Rating;

class RatingsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $restaurant = Restaurant::findOrFail($id);

        return view('rate', ['restaurant' => $restaurant]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRatingRequest $request, $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        $rating = new Rating();
        $rating->fill($request->input());
        $rating->restaurant()->associate($restaurant);
        $rating->save();

        return $restaurant;
    }
}
