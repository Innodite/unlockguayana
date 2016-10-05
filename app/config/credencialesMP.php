<?php
require_once ('../vendor/mercadopago/sdk/lib/mercadopago.php');

$mp = new MP ("5105475828202385", "wWbO5tuJZ3CMGU3DBqYJxQ9AOyRBLXOB");

$access_token = $mp->get_access_token();

print_r ($access_token);
?>