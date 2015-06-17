<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producttoindigrient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producttoindigrients', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('product_id')->unsigned();
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                $table->integer('indigrient_id')->unsigned();
                $table->foreign('indigrient_id')->references('id')->on('indigrients')->onDelete('cascade');
                $table->integer('weight');
                $table->string('title',150);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producttoindigrients');
    }
}
