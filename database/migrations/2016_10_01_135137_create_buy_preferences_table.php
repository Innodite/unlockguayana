<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyPreferencesTable extends Migration
{
  /**
    * Run the migrations.
    *
    * @return void
    */
  public function up()
  {
    Schema::create('buy_preferences', function(Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned();
      $table->integer('exchanges_rate_id')->unsigned();
      $table->string('reference');
      $table->string('payment_provider');
      $table->text('preference');
      $table->string('status')->default('pending');

      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('exchanges_rate_id')->references('id')->on('exchanges_rates');
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
    // Drop table
    Schema::drop('buy_preferences');
  }
}
