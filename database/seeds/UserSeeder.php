<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder {

  public function run()
  {

    DB::table('users')->truncate();

    $user = User::create(
      array(
        'name' => 'root',
        'email' => 'root@root.com',
        'password' => Hash::make('1234'),
        'currency_id' => 261
    ));

    $role = Role::where('name', '=', 'root')->get()->first();
    $user->attachRole( $role );
  }
 
}
