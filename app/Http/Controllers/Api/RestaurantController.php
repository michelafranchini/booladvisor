<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Plate; 

class RestaurantController extends Controller
{
    public function index() {
        $restaurants = Restaurant::all(); 

        return response()->json($restaurants); 
    }

    public function show($slug) {
        $restaurant = Restaurant::where('slug', $slug)->first(); 

        return response()->json($restaurant); 
    }

    public function showMenu(Restaurant $restaurant) {
        
        $plates = $restaurant->plates ; 
        
        return response()->json($plates); 
    }
}
