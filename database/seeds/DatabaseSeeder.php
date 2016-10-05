<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      $this->call(CurrencyTableSeeder::class);
      $this->call(ExchangesRateTableSeeder::class);
      $this->call(AppConfigTableSeeder::class);
      $this->call(ApisConfigTableSeeder::class);
      $this->call(PermissionTableSeeder::class);
      $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
    }
}
