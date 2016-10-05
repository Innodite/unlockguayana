<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
  //
  public function exchanges_rates()
  {
    return $this->hasMany('App\ExchangesRate');
  }
}
