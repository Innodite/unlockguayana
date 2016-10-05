<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RoleSeeder extends Seeder {

  public function run()
  {

    DB::table('role_user')->truncate();
    DB::table('roles')->truncate();

    /* ::::::::::: PERMISSIONS ::::::::::: */
    $permisos = Permission::all();

    $permisos_for_administrator = array(
      // Apis Config
      "apis-config-list",
      "apis-config-create",
      "apis-config-edit",
      // App Config
      "app-config-list",
      "app-config-edit",
      // Currencies
      "currencies-list",
      // Exchanges Rate
      "exchanges-rates-list",
      "exchanges-rates-create",
      "exchanges-rates-edit",
      // Simple Balance
      "simple-balance-list",
      // Order
      "orders-list",
      // OrderDetails
      "order-details-list"
    );

    $permisos_for_client = array(
      // Owner User
      "user-list",
      "user-edit",
      // Owner Order
      "orders-list",
      "orders-create",
      // 
    );

    /* ::::::::::: ROOT ::::::::::: */
    $root = Role::create(array(
      'name'         => 'root', 
      'display_name' => 'Admin',
      'description'  => 'Super Admin'
    ));

    foreach($permisos as $permiso){
      $root->attachPermission($permiso); 
    }

    /* ::::::::::: ADMINISTRATOR ::::::::::: */
    $administrator = Role::create(array(
      'name'         => 'admin', 
      'display_name' => 'Administrator',
      'description'  => 'Site Administrator'
    ));

    foreach($permisos as $permiso){
      if (in_array($permiso->name, $permisos_for_administrator))
      {
        $administrator->attachPermission($permiso);
      }
    }

    /* ::::::::::: UICLIENT ::::::::::: */
    $uiclient = Role::create(array(
      'name'         => 'uiclient', 
      'display_name' => 'GUI Client',
      'description'  => 'Site Client'
    ));

    foreach($permisos as $permiso){
      if (in_array($permiso->name, $permisos_for_client))
      {
        $uiclient->attachPermission($permiso);
      }
    }
  }
 
}