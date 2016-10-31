<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        // Include ratings in each restaurant. with() includes related models
        // We must use get() here, because with() returns a Query Builder
        return Restaurant::with('ratings')->get();
    }
}
