<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
    * Run the migrations.
    *
    * @return void
    */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->integer('currency_id')->unsigned();
      $table->string('lang')->default('es');
      $table->float('balance_available')->default(0);
      $table->float('amount_blocked')->default(0);
      $table->float('special_percentage')->default(0);
      $table->string('status')->default('ACT');
      $table->string('password');

      $table->foreign('currency_id')->references('id')->on('currencies');
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
    Schema::drop('users');
  }
}
