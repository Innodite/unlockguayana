<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class AppConfigTableSeeder extends Seeder {

    public function run()
    {
      // TestDummy::times(20)->create('App\Post');
      DB::table('app_configs')->truncate();
      DB::table('app_configs')->insert([
        'meta_name'         =>  "default_language",
        'meta_value'        =>  "es",
        'meta_description'  =>  "Default Language for App",
        'meta_info'         =>  "Default Language Config"
      ]);
    }

}

