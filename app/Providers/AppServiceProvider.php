<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ExchangesRate;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    //
    ExchangesRate::saving(function ($exchanges_rate) {
      $exchanges_rate->number_modifying = ExchangesRate::getNextMovementNumber($exchanges_rate->currency_id);
      $exchanges_rate->change_date = date("d/m/Y");
    });
  }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
