<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppConfigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('app_configs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('meta_name');
            $table->string('meta_value');
            $table->string('meta_description');
            $table->string('meta_info');
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
		Schema::drop('app_configs');
	}

}
