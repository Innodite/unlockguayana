<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyPreference extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'buy_preferences';

  protected $fillable = [
    'reference',
    'payment_provider',
    'preference',
    'status'
  ];
  /**
  * The attributes that should be casted to native types.
  *
  * @var array
  */
  protected $casts = [
    'preference' => 'array',
  ];
  /*
    Define Scopes
  */
  public function scopeGetByReference($query, $reference_id) {
    return $query->where("reference", "=", $reference_id)
                 ->where("status",    "=", "pending");
  }

}