<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('categories_id')->unsigned();
          $table->integer('author')->unsigned();
          $table->string('thumbnails');
          $table->string('title');
          $table->string('slug');
          $table->text('content');
          $table->integer('type');
          $table->timestamps();

          $table->foreign('categories_id')->references('id')->on('categories')->onDelete('CASCADE');
          $table->foreign('author')->references('id')->on('administrators')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
