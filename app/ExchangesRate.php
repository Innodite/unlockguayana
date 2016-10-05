<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesRate extends Model
{

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
