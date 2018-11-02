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
          $table->increments('id_');
          $table->integer('categories_id')->unsigned();
          $table->integer('author_')->unsigned();
          $table->string('thumbnails_');
          $table->string('title_');
          $table->string('slug_');
          $table->text('content_');
          $table->integer('type_');
          $table->timestamps();

          $table->foreign('categories_id')->references('id_')->on('categories')->onDelete('CASCADE');
          $table->foreign('author_')->references('id_')->on('administrator')->onDelete('CASCADE');
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
