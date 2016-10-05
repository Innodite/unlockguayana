<?php

namespace App\Libs;

use GuzzleHttp\Client;
use GuzzleHttp\EntityBody;
use GuzzleHttp\Stream\Stream;
use App\Libs\Market4GsmApi;

/**
* Innodite Inc                 - www.innodite.com
* author: merma158 at Innodite - javierurbano11@gmail.com
* Integrate APIs Mobile Networks
*/
class ApiIntegrator
{

  private $client;
  private $base_uri = "http://test.portalreservas.sinpapeles.com";
  
  function __construct(){
    //$this->client = new Client(['base_uri' => $this->base_uri]);
    $this->client = new Market4GsmApi();
  }

  public function getApiInfo()
  {
    return $this->client->getInfo();
  }

  public function getApiFileServiceList()
  {
    return $this->client->getFileServiceList();
  }

  public function getApiIMEIServiceList()
  {
    return $this->client->getIMEIServiceList(); 
  }

  public function send_request() {
    //$response = $this->client->get('/pg_booking/providers.json');
    //return $response->getBody(true)->getContents();
  }


}