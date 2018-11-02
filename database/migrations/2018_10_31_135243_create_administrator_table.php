<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrator', function (Blueprint $table) {
          $table->increments('id_');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('full_name');
          $table->string('email_', 191)->unique();
          $table->string('password_');
          $table->integer('level_');
          $table->rememberToken();
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
        Schema::dropIfExists('administrator');
    }
}