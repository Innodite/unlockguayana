<?php namespace App\Libs;

use App\ExchangesRate;
use App\ApisConfig;
use App\AppConfig;
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

  public static function publicComboBoxCurrencies()
  {
    $currencies = Currency::where("status", "=", "ACT")->orderBy('currency', 'asc')->get();
    $array = array();
            
    foreach ($currencies AS $currency) {
      $array[$currency->id] = $currency->currency;
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

  public static function getMovementTypesForBalances()
  {
    return array(
      "credit"  => "credit",
      "debit"   => "debit",
      "refound" => "refound",
      "buy"     => "buy"
    );
  }

  public static function current_currency()
  {
    $currency = Utils::get_current_currency();
    return [$currency->id => $currency->currency];
  }

  public static function get_current_currency()
  {
    $currency_id = empty(\Session::get('currency')) ? AppConfig::get_default_currency()
                                                    : \Session::get('currency');

    return Currency::find($currency_id);
  }

  public static function get_price_by_currency($currency)
  {
    $exchanges_rate = Utils::get_last_exchanges_rate_by_currency($currency);
    $api_config     = ApisConfig::GetActiveApi()->first();

    $rate         = floatval($exchanges_rate->rate);
    $special_fees = floatval(\Auth::user()->special_percentage);
    $default_fees = floatval($api_config->api_cli_increased_percentage);

    $fees    = $special_fees > 0 ? $special_fees : $default_fees;
    $refound = ($fees/100) * $rate;
    return $rate + $refound;
  }

  public static function get_last_exchanges_rate_by_currency($currency)
  {
    return ExchangesRate::GetByCurrency($currency->id)->first();
  }
}