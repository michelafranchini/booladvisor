<?php

namespace App\Http\Controllers\Admin;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Storage; 

class RestaurantController extends Controller
{
    private $validationArray = [
        'name' => 'required|max:100', 
        'address' => 'required', 
        'phone' => 'required', 
        'description' => 'required', 
        'image'=> 'required|image|max:2048'
    ]; 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all(); 
        return view('admin.restaurants.index', compact('restaurants')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); 

        $request->validate($this->validationArray); 

        $newRestaurant = new Restaurant(); 
        $data['slug'] = Str::of($data['name'])->slug(); 

        if(array_key_exists('image', $data)) {
            $data['image'] = Storage::put('img_restaurant', $data['image']); 
        }

        $newRestaurant->fill($data); 
        $newRestaurant->save(); 

        return redirect()->route('admin.restaurants.show', $newRestaurant->id); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('admin.restaurants.show', compact('restaurant')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view('admin.restaurants.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $data = $request->all(); 

        $request->validate($this->validationArray); 

        $data['slug'] = Str::of($data['name'])->slug(); 

        if(array_key_exists('image', $data)) {
            $data['image'] = Storage::put('img_restaurant', $data['image']); 
        }

        $restaurant->update($data); 

        return redirect()->route('admin.restaurants.show', $restaurant->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
