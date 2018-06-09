<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caps', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name',50);
            $table->text('description');
            $table->string('image');
            $table->double('price');
            $table->integer('category_id')->unsigned();            
            $table->integer('supplier_id')->unsigned();            
            
        });
        Schema::table('caps', function ($table) {            
            $table->foreign('category_id')->references('id')->on('categories');            
            $table->foreign('supplier_id')->references('id')->on('suppliers');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('caps', function ($table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['supplier_id']);
    });        
        Schema::dropIfExists('caps');
    }
}
