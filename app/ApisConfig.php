<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApisConfig extends Model
{
  /*
    Define Scopes
  */
  public function scopeGetActiveApi($query) {
    return $query->where("api_status", "=", "ACT");
  }
}
