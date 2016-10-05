<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionTableSeeder extends Seeder {

/**
  * Run the database seeds.
  *
  * @return void
  */

  public function run()
  {

    $permission = [
      // Permission for User
      [
        'name' => 'user-list',
        'display_name' => 'Display User Listing',
        'description' => 'See only Listing Of User'
      ],
      [
        'name' => 'user-create',
        'display_name' => 'Create User',
        'description' => 'Create New User'
      ],
      [
        'name' => 'user-edit',
        'display_name' => 'Edit User',
        'description' => 'Edit User'
      ],
      [
        'name' => 'user-delete',
        'display_name' => 'Delete User',
        'description' => 'Delete User'
      ],
      // Permission for Role
      [
        'name' => 'role-list',
        'display_name' => 'Display Role Listing',
        'description' => 'See only Listing Of Role'
      ],
      [
        'name' => 'role-create',
        'display_name' => 'Create Role',
        'description' => 'Create New Role'
      ],
      [
        'name' => 'role-edit',
        'display_name' => 'Edit Role',
        'description' => 'Edit Role'
      ],
      [
        'name' => 'role-delete',
        'display_name' => 'Delete Role',
        'description' => 'Delete Role'
      ],
      // Permission for Apis Config
      [
        'name' => 'apis-config-list',
        'display_name' => 'Display ApisConfig Listing',
        'description' => 'See only Listing Of ApisConfig'
      ],
      [
        'name' => 'apis-config-create',
        'display_name' => 'Create ApisConfig',
        'description' => 'Create New ApisConfig'
      ],
      [
        'name' => 'apis-config-edit',
        'display_name' => 'Edit ApisConfig',
        'description' => 'Edit ApisConfig'
      ],
      [
        'name' => 'apis-config-delete',
        'display_name' => 'Delete ApisConfig',
        'description' => 'Delete ApisConfig'
      ],
      // Permission for App Config
      [
        'name' => 'app-config-list',
        'display_name' => 'Display AppConfig Listing',
        'description' => 'See only Listing Of AppConfig'
      ],
      [
        'name' => 'app-config-create',
        'display_name' => 'Create AppConfig',
        'description' => 'Create New AppConfig'
      ],
      [
        'name' => 'app-config-edit',
        'display_name' => 'Edit AppConfig',
        'description' => 'Edit AppConfig'
      ],
      [
        'name' => 'app-config-delete',
        'display_name' => 'Delete AppConfig',
        'description' => 'Delete AppConfig'
      ],
      // Permission for Currencies
      [
        'name' => 'currencies-list',
        'display_name' => 'Display Currencies Listing',
        'description' => 'See only Listing Of Currencies'
      ],
      [
        'name' => 'currencies-create',
        'display_name' => 'Create Currencies',
        'description' => 'Create New Currencies'
      ],
      [
        'name' => 'currencies-edit',
        'display_name' => 'Edit Currencies',
        'description' => 'Edit Currencies'
      ],
      [
        'name' => 'currencies-delete',
        'display_name' => 'Delete Currencies',
        'description' => 'Delete Currencies'
      ],
      // Permission for Exchanges Rate
      [
        'name' => 'exchanges-rates-list',
        'display_name' => 'Display Exchanges Rates Listing',
        'description' => 'See only Listing Of Exchanges Rates'
      ],
      [
        'name' => 'exchanges-rates-create',
        'display_name' => 'Create Exchanges Rates',
        'description' => 'Create New Exchanges Rates'
      ],
      [
        'name' => 'exchanges-rates-edit',
        'display_name' => 'Edit Exchanges Rates',
        'description' => 'Edit Exchanges Rates'
      ],
      [
        'name' => 'exchanges-rates-delete',
        'display_name' => 'Delete Exchanges Rates',
        'description' => 'Delete Exchanges Rates'
      ],
      // Permission for Simple Balance
      [
        'name' => 'simple-balance-list',
        'display_name' => 'Display Simple Balance Listing',
        'description' => 'See only Listing Of Simple Balance'
      ],
      [
        'name' => 'simple-balance-create',
        'display_name' => 'Create Simple Balance',
        'description' => 'Create New Simple Balance'
      ],
      [
        'name' => 'simple-balance-edit',
        'display_name' => 'Edit Simple Balance',
        'description' => 'Edit Simple Balance'
      ],
      [
        'name' => 'simple-balance-delete',
        'display_name' => 'Delete Simple Balance',
        'description' => 'Delete Simple Balance'
      ],
      // Permission for Order
      [
        'name' => 'orders-list',
        'display_name' => 'Display Order Listing',
        'description' => 'See only Listing Of Order'
      ],
      [
        'name' => 'orders-create',
        'display_name' => 'Create Order',
        'description' => 'Create New Order'
      ],
      [
        'name' => 'orders-edit',
        'display_name' => 'Edit Order',
        'description' => 'Edit Order'
      ],
      [
        'name' => 'orders-delete',
        'display_name' => 'Delete Order',
        'description' => 'Delete Order'
      ],
      // Permission for OrderDetail
      [
        'name' => 'order-details-list',
        'display_name' => 'Display Order Details Listing',
        'description' => 'See only Listing Of Order Details'
      ],
      [
        'name' => 'order-details-create',
        'display_name' => 'Create Order Details',
        'description' => 'Create New Order Details'
      ],
      [
        'name' => 'order-details-edit',
        'display_name' => 'Edit Order Details',
        'description' => 'Edit Order Details'
      ],
      [
        'name' => 'order-details-delete',
        'display_name' => 'Delete Order Details',
        'description' => 'Delete Order Details'
      ]

    ];

    // Clear database tables
    DB::table('permission_role')->truncate();
    DB::table('permissions')->truncate();

    foreach ($permission as $key => $value) {
      Permission::create($value);
    }

  }

}