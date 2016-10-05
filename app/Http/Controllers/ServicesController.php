<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Libs\ApiIntegrator;

/**
* 
*/
class ServicesController extends Controller
{
  
  public function UnlockIMEI()
  {
    $api = new ApiIntegrator();
    $api_action = json_decode($api->getApiIMEIServiceList(), true);
    return view('services.unlock_imei', compact('api_action')); 
  }
  public function UnlockHash()
  {
    $api = new ApiIntegrator();
    $api_action = json_decode($api->getApiFileServiceList(), true);
    return view('services.unlock_hash', compact('api_action'));
  }

  public function CheckIMEI()
  {
    $api = new ApiIntegrator();
    $api_action = json_decode($api->getApiIMEIServiceList(), true);
    return view('services.check_imei', compact('api_action')); 
  }
}