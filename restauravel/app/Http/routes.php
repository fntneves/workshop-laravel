<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return App\Restaurant::all();
// });

Route::resource('/restaurants', 'RestaurantsController',
		['only' => ['index']]
);

Route::get('/restaurants/{id}/rate', 'RatingsController@create');
Route::post('/restaurants/{id}/rate', ['uses' => 'RatingsController@store', 'as' => 'ratings.store']);

// Route::get('/restaurants', 'RestaurantsController@index');
