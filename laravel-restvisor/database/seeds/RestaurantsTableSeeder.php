<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant = new Restaurant;
        $restaurant->name = "Dummy 1";
        $restaurant->email = "rest1@email.com";
        $restaurant->address = "Address 1";
        $restaurant->save();

        $restaurant = new Restaurant;
        $restaurant->name = "Dummy 2";
        $restaurant->email = "rest2@email.com";
        $restaurant->address = "Address 2";
        $restaurant->save();

        $restaurant = new Restaurant;
        $restaurant->name = "Dummy 3";
        $restaurant->email = "rest3@email.com";
        $restaurant->address = "Address 3";
        $restaurant->save();
    }
}
