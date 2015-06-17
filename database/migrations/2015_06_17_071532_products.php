<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('category_id')->unsigned()->default(0);
                $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
                $table->string('name',100);
                $table->string('pictureurl',100);
                $table->integer('price');
                $table->integer('discount');
                $table->integer('active')->default(1);
                $table->integer('arhive')->default(1);
                $table->string('title',150);
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
        Schema::drop('products');
    }
}
