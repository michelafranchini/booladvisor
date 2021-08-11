<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    protected $fillable = [
        'name', 
        'price', 
        'ingredients', 
        'description', 
        'image', 
        'restaurant_id'
    ]; 

    public function restaurant() {
        return $this->belongsTo('App\Restaurant'); 
    }
}
