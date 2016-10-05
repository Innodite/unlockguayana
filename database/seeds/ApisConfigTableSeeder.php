<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ApisConfigTableSeeder extends Seeder {

  public function run()
  {
    // TestDummy::times(20)->create('App\Post');
    DB::table('apis_configs')->truncate();
    DB::table('apis_configs')->insert([
      'api_name' => "Market4GSM",
      'api_type' => "DHRU",
      'api_url_base' => "http://market4gsm.com",
      'api_request_format' => "JSON",
      'api_user_name' => "unlockguayana",
      'api_key' => "XOT-LPK-38C-DAC-18B-VMI-B9P-G7R",
      'api_secret' => "",
      'api_cli_increased_percentage' => 15,
      'api_dev_increased_percentage' => 10
    ]);
  }

}

