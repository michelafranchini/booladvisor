<?php

use App\Plate;
use Illuminate\Database\Seeder;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i < 3; $i++) {
            $newPlate = new Plate(); 

            $newPlate->name = "Carbonara"; 
            $newPlate->price = "12.00"; 
            $newPlate->ingredients = "Pasta di semola, uova, guanciale, pepe nero, pecorino"; 
            $newPlate->description = "Nella vera pasta alla carbonara NON SI USA LA PANNA"; 
            $newPlate->image = "https://www.informacibo.it/wp-content/uploads/2018/04/carbonara.jpg"; 

            $newPlate->save(); 
        }
    }
}
