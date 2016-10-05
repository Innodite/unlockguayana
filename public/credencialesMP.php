<?php
require_once ('../vendor/mercadopago/sdk/lib/mercadopago.php');

$mp = new MP ("5105475828202385", "wWbO5tuJZ3CMGU3DBqYJxQ9AOyRBLXOB");

$access_token = $mp->get_access_token();
$mppay = new MP($access_token); 

$payment_data = array(
    "transaction_amount"   => 100, 
    "token"                => $_POST['token'], 
    "description"          => "Title of what you are paying for", 
    "installments"         => 1, 
    "payment_method_id"    => "visa",
    "payer"                => array ("email" => "test@testuser.com")
);

$payment = $mppay->post("/v1/payments", $payment_data);

echo "<pre>";
print_r($payment);


print_r ($access_token);
?>