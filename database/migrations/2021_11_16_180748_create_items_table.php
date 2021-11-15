<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('items')){
            Schema::create('items', function (Blueprint $table) {
                $table->id();
                $table->integer('quantity');
                $table->integer('subtotal');
                $table->foreignId('productID')->references('id')->on('products')->onDelete('cascade');
                $table->foreignId('orderID')->references('id')->on('orders')->onDelete('cascade');
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('items');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
