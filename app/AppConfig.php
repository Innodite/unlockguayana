<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
  //
  public static function get_default_language() {
    return AppConfig::where('meta_name', '=', 'default_language')->first()->meta_value;
  }
}
