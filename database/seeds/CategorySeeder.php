<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'antipasti', 
            'primi piatti', 
            'secondi piatti', 
            'contorni', 
            'dolci', 
            'bevande', 
            'altro'
        ]; 

        foreach ($categories as $category) {
            $newCategory = new Category(); 

            $newCategory->name = $category; 
            $newCategory->slug = Str::slug($newCategory->name, '-'); 

            $newCategory->save(); 
        }
    }
}
