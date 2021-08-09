<?php

use Illuminate\Database\Seeder;
use App\Restaurant; 
use Illuminate\Support\Str; 

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 3; $i++) {
            $newRestaurant = new Restaurant(); 

            $newRestaurant->name = "Nome Ristorante 1".$i; 
            $newRestaurant->slug = Str::slug($newRestaurant->name, '-'); 
            $newRestaurant->address = "Indirizzo ristorante";
            $newRestaurant->phone = "3332244555";
            $newRestaurant->email = "Indirizzo@ristorante.it";
            $newRestaurant->timetables = "Orario ristorante";
            $newRestaurant->image = " https://res.cloudinary.com/tf-lab/image/upload/w_600,h_337,c_fill,g_auto:subject,q_auto,f_auto/restaurant/85621049-82c5-42a2-8265-41f111f503dd/99232279-83ea-4a7d-b923-95e7160933d2.jpg "; 
            $newRestaurant->description = "Descrizione";

            $newRestaurant->save(); 
        }
    }
}
