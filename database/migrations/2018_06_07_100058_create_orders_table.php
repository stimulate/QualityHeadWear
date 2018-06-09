<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {        
        Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');  
        Schema::create('orders', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('address');
            $table->string('city');
            $table->string('postalCode');
            $table->string('state');
            $table->string('phoneNumber');
            $table->string('orderDate');
            $table->double('subtotal');
            $table->double('gst');
            $table->double('grandtotal');
            $table->enum('status', ['pending','paid','shipped'])->nullable();            
            $table->integer('user_id')->unsigned()->index();            
            $table->timestamps();
        });
        Schema::table('orders', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function ($table) {
            $table->dropForeign(['user_id']);
    });
        Schema::dropIfExists('orders');
    }
}
