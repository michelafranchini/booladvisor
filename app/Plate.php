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
        'restaurant_id', 
        'category_id'
    ]; 

    public function restaurant() {
        return $this->belongsTo('App\Restaurant'); 
    }

    public function category() {
        return $this->belongsTo('App\Category'); 
    }
}
