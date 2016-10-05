<?php namespace App\Libs;

use App\Currency;
use App\Role;

class Utils { 

  public static function getComboBoxCurrencies() 
  {     
    $currencies = Currency::where("status", "=", "ACT")->orderBy('currency', 'asc')->get();
    $array = array();
            
    foreach ($currencies AS $currency) {
      $array[$currency->id] = "{$currency->currency} - {$currency->code} ({$currency->entity})";
    }
            
    return $array;
  }

  public static function getComboBoxRoles()
  {
    $roles = Role::orderBy('display_name', 'asc')->get();
    $array = array();
            
    foreach ($roles AS $role) {
      $array[$role->id] = $role->display_name;
    }
            
    return $array;
  }
}