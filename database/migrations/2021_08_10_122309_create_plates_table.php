<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->float('price', 5 , 2);  
            $table->string('ingredients'); 
            $table->text('description')->nullable(); 
            $table->string('image')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('restaurant_id')->nullable(); 

            $table->foreign('restaurant_id')
                ->references('id')
                ->on('restaurants')
                ->onDelete('CASCADE'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plates');
    }
}
