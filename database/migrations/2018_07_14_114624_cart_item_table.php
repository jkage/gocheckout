<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CartItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cart_id')->unsigned()->index();
            $table->integer('item_id')->unsigned()->index();
            $table->string('phone_number')->nullable();
            $table->timestamps();
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_item');
    }
}
