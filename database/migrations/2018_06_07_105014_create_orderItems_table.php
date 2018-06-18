<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            //$table->engine = “InnoDB”;
            $table->increments('id');           
            $table->integer('quantity');
            $table->integer('order_id')->unsigned()->index();            
            $table->integer('cap_id')->unsigned()->index();            
            $table->timestamps();
        });
        Schema::table('order_items', function ($table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); 
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
        Schema::table('order_items', function ($table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['cap_id']);
    });
        Schema::dropIfExists('order_items');
    }
}
