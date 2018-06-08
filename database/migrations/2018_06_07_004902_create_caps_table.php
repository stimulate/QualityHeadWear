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
            $table->increments('capID');
            $table->string('name',50);
            $table->string('description');
            $table->string('image');
            $table->double('price');
            $table->integer('categoryID')->unsigned()->index(); 
            $table->integer('supplierID')->unsigned()->index(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caps');
    }
}
