<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Books', function (Blueprint $table) {
            $table->id();
            $table->string('BookName')->unique();
            $table->string('Description');
            $table->string('Year');
            $table->string('Image');
            $table->integer('Amount');
            $table->bigInteger('IdAuthors')->unsigned();
            $table->bigInteger('IdCategories')->unsigned();
            $table->foreign('IdAuthors')->references('id')->on('Authors');
            $table->foreign('IdCategories')->references('id')->on('Categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Books');
    }
}
