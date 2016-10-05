<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ExchangesRateTableSeeder extends Seeder {

    public function run()
    {
      // TestDummy::times(20)->create('App\Post');
      DB::table('exchanges_rates')->truncate();

      DB::table('exchanges_rates')->insert([
        'currency_id' =>  255, // US Dollar
        'rate'        =>  1,
        'change_date' => date("d/m/Y"),
        'number_modifying' => 1
      ]);
    }

}