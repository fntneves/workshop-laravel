<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('restaurants', 'RestaurantsController',
    ['only' => 'index'] // Consider only index action of this controller
);

// We have custom routes here, so we specify it manually
// Id of the restaurant to rate, {restaurantId}, is included in URI
// ...@create shows the form
// ...@store stores in database
Route::get('/restaurants/{restaurantId}/rate', 'RatingsController@create');
Route::post('/restaurants/{restaurantId}/rate',
    [
        'as' => 'ratings.store', // Give a name to this route
        'uses' => 'RatingsController@store',
    ]
);
