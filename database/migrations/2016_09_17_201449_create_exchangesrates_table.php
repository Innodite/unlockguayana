<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangesratesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exchanges_rates', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('currency_id')->unsigned();
            $table->datetime('change_date');
            $table->float('rate');
            $table->integer('number_modifying');

            $table->foreign('currency_id')->references('id')->on('currencies');
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
		Schema::drop('exchanges_rates');
	}

}
