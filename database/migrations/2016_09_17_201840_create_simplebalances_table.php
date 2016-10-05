<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimplebalancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('simple_balances', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('movement_type');
            $table->float('usd_amount');
            $table->float('local_amount');
            $table->float('credits');
            $table->integer('exchanges_rate_id')->unsigned();
            $table->datetime('movement_date');
            $table->text('transaction_detail');
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
		Schema::drop('simple_balances');
	}

}
