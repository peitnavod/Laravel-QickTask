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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_name')->unique();
            $table->string('description');
            $table->string('year');
            $table->string('image');
            $table->integer('amount');
            $table->bigInteger('id_authors')->unsigned();
            $table->bigInteger('id_categories')->unsigned();
            $table->foreign('id_authors')->references('id')->on('authors');
            $table->foreign('id_categories')->references('id')->on('categories');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
