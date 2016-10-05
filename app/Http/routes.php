<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::group(['middleware' => ['web']], function () {

  Route::get('/',        function () { return view('welcome');  });
  Route::get('/blog',    function () { return view('blog');     });
  Route::get('/plans',   function () { return view('plans');    });
  Route::get('/about',   function () { return view('about_us'); });
  Route::get('/contact', function () { return view('contact');  });

  Route::get('/home', ['as' => 'home', 'uses' =>'HomeController@index']);

//  Route::get('/notify',function(){
//    session()->flash('msg','Hey, You have a message to read');
//    return redirect()->to('/');
//  });

  Route::get('lang/{lang}',            ['as'=>'lang.switch',     'uses'=>'SwitchController@switchLang']);
  Route::get('currency/{currency_id}', ['as'=>'currency.switch', 'uses'=>'SwitchController@switchCurrency']);



  // Services
  Route::get('services/unlock_hash', [
    'as'   => 'unlock_hash_service', 
    'uses' => 'ServicesController@UnlockHash'
  ]);

  Route::get('services/unlock_imei', [
    'as'   => 'unlock_imei_service', 
    'uses' => 'ServicesController@UnlockIMEI'
  ]);

  Route::get('services/check_imei', [
    'as'   => 'check_imei_service', 
    'uses' => 'ServicesController@CheckIMEI'
  ]);
  
  /* Paypal Integration */
  Route::get('payment', array(
  'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
  ));

  Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
  ));

  // Users
  Route::resource('users','UserController');
  Route::resource('roles','RoleController');
  Route::get('/permisos','PermissionController@index');
  Route::get('/permisos/asignar','PermissionController@assign');
  Route::get('/permisos/desasignar','PermissionController@unassign');
  Route::get('/mp_credit_check','SimpleBalanceController@mp_credits_check');
  Route::get('/mp_capture','SimpleBalanceController@mp_capture');
  // Config
  Route::resource("app_configs","AppConfigController");
  Route::resource("apis_configs","ApisConfigController");
  // Orders
  Route::resource("orders","OrderController");
  Route::resource("order_details","OrderDetailController");
  // Currency
  Route::resource("currencies","CurrencyController");
  Route::resource("exchanges_rates","ExchangesRateController");
  Route::resource("simple_balances","SimpleBalanceController");

});
