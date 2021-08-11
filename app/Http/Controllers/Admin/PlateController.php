<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Plate;
use Illuminate\Http\Request;
use App\Restaurant; 
use Illuminate\Support\Facades\Storage; 

class PlateController extends Controller
{
    private $validationArray = [
        'name' => 'required|max:100', 
        'price' => 'required', 
        'ingredients' => 'required', 
        'image' => 'required|image'
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Restaurant $restaurant)
    {
        // $plates = Plate::where('restaurant_id', $restaurant->id)->get(); 

        // return view('admin.plates.index', compact('plates')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    { 
        return view('admin.plates.create', compact('id')); 
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

        $plate = new Plate(); 

        if(array_key_exists('image', $data)) {
            $data['image'] = Storage::put('img_plates', $data['image']); 
        }

        $plate->fill($data);  

        $plate->save(); 

        return redirect()->route('admin.plates.show', $plate->id); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plate $plate)
    {
        //$plate = Plate::where('id', $id)->firstOrFail(); 

        return view('admin.plates.show', compact('plate')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plate $plate)
    {
        return view('admin.plates.edit', compact('plate')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plate $plate)
    {
        $data = $request->all(); 

        $request->validate($this->validationArray); 

        if(array_key_exists('image', $data)) {
            $data['image'] = Storage::put('img_plates', $data['image']); 
        }; 

        $plate->update($data); 

        return redirect()->route('admin.plates.show', $plate->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plate $plate)
    {
        $plate->delete(); 

        return redirect()->route('admin.plates.show'); 
    }
}
