<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 
        'slug', 
        'address',
        'phone',
        'email',
        'timetables',
        'image',
        'description'
    ]; 
}
