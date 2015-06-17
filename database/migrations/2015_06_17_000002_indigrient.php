<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Indigrient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indigrients', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name',100);
                $table->string('pictureurl',100);
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
        Schema::drop('indigrients');
    }
}
