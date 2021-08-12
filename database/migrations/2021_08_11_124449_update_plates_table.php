<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('plates', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')
            ->nullable(); 

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
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
        Schema::table('plates', function (Blueprint $table) {
            $table->dropForeign('plates_category_id_foreign'); 
            $table->dropColumn('category_id');
        });
    }
}
