<?php

namespace App\Libs;

use GuzzleHttp\Client;
use GuzzleHttp\EntityBody;
use GuzzleHttp\Stream\Stream;
use App\Libs\DhruFusion;

/**
* Innodite Inc                 - www.innodite.com
* author: merma158 at Innodite - javierurbano11@gmail.com
* Integrate APIs Mobile Networks
*/
class Market4GsmApi
{

  private $client;

  private $credentials = array(
    "DHRUFUSION_URL" => "http://market4gsm.com",
    "REQUESTFORMAT"  => "JSON",
    "USERNAME"       => "unlockguayana",
    "API_ACCESS_KEY" => "XOT-LPK-38C-DAC-18B-VMI-B9P-G7R"
  );

  function __construct()
  {
    $this->client = new DhruFusion($this->credentials);
    $this->client->debug = false;
  }

  protected function prepare_out($response)
  {
    if ($response && isset($response["SUCCESS"]))
    {
      return json_encode(array("success" => true, "data" => $response));
    }
    return json_encode(array("success" => false));
  }

  public function getInfo() 
  {
    return $this->prepare_out($this->client->action('accountinfo')); 
  }

  public function getFileOrderDetails()
  {
    $para['ID'] = '60';
    return $this->prepare_out($this->client->action('getfileorder',$para));
  }

  public function getFileServiceList()
  {
    return $this->prepare_out($this->client->action('fileservicelist'));
  }

  public function getIMEIOrdersDetails()
  {
    $para['ID'] = '34'; // got REFERENCEID from placeimeiorder
    return $this->prepare_out($this->client->action('getimeiorder', $para));
  }

  public function getIMEIServiceList()
  {
    return $this->prepare_out($this->client->action('imeiservicelist'));
  }

  public function getMEPList()
  {
    return $this->prepare_out($this->client->action('meplist'));
  }

  public function getModelList()
  {
    $para['ID'] = "3398"; // got from 'imeiservicelist' [SERVICEID]
    return $this->prepare_out($this->client->action('modellist', $para));
  }

  public function getProviderList()
  {
    $para['ID'] = "3398"; // got from 'imeiservicelist' [SERVICEID]
    return $this->prepare_out($this->client->action('providerlist', $para));
  }

  public function getSingleIMEIServideDetails()
  {
    $para['ID'] = "23"; // got from 'imeiservicelist' [SERVICEID]
    return $this->prepare_out($this->client->action('getimeiservicedetails', $para));
  }

  public function placeFileOrder()
  {
    $para['ID'] = '113';
    $para['FILENAME'] = 'ORDERID31TEST.txt';
    $para['FILEDATA'] = base64_encode('TESTDATA');
    return $this->prepare_out($this->client->action('placefileorder',$para));
  }

  public function placeIMEIOrder()
  {
    $para['IMEI'] = "111111111111116";
    $para['ID'] = "1382"; // got from 'imeiservicelist' [SERVICEID]
    // PARAMETRES IS REQUIRED
    // $para['MODELID'] = "";
    // $para['PROVIDERID'] = "";
    // $para['MEP'] = "";
    // $para['PIN'] = "";
    // $para['KBH'] = "";
    // $para['PRD'] = "";
    // $para['TYPE'] = "";
    // $para['REFERENCE'] = "";
    // $para['LOCKS'] = "";

    return $this->prepare_out($this->client->action('placeimeiorder', $para));

  }
}