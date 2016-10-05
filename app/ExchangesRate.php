<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesRate extends Model
{
  /*
    Define Scopes
  */
  public function scopeGetByCurrency($query, $currency_id) 
  {
    return $query->where("currency_id", "=", $currency_id)
                 ->where("number_modifying", "=", $query->GetLastModify($currency_id));
  }

  public function scopeGetLastModify($query, $currency_id) 
  {
    return $query->where("currency_id", "=", $currency_id)->max("number_modifying");
  }
  // End Scopes

  public function currency()
  {
    return $this->belongsTo('App\Currency');
  }
  //
  public static function getNextMovementNumber($currency)
  {
    return (ExchangesRate::where("currency_id","=",$currency)->count() + 1);
  }
}
