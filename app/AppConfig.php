<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
  //
  public static function get_default_language() {
    return AppConfig::where('meta_name', '=', 'default_language')->first()->meta_value;
  }

  public static function get_default_currency() {
    return AppConfig::where("meta_name", "=", "default_currency")->first()->meta_value;
  }
}
