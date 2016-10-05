<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApisconfigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apis_configs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('api_name');
            $table->string('api_type');
            $table->string('api_url_base');
            $table->string('api_request_format');
            $table->string('api_user_name');
            $table->string('api_key');
            $table->string('api_secret');
            $table->float('api_cli_increased_percentage')->default(0);
            $table->float('api_dev_increased_percentage')->default(0);
            $table->string('api_status')->default('ACT');
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
		Schema::drop('apis_configs');
	}

}
