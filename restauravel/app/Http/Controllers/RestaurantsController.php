<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Restaurant;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the restaurants.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Restaurant::with('ratings')->get();
    }
}
