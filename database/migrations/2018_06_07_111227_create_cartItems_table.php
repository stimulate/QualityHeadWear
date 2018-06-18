<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartItems', function (Blueprint $table) {
            
            $table->increments('id');           
            $table->integer('count');      
            $table->integer('cap_id')->unsigned()->index();             
            $table->timestamps();
        });
        Schema::table('cartItems', function ($table) {
            $table->foreign('cap_id')->references('id')->on('caps');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartItems', function ($table) {
            $table->dropForeign(['cap_id']);
    });
        Schema::dropIfExists('cartItems');
    }
}
