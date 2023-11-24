<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = ''; // use 'sandbox' for development in the test environment
$apiKey   = ''; // use your sandbox app API key for development in the test environment
$AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms      = $AT->sms();

// Use the service
$result   = $sms->send([
    'to'      => '+254112163919',
    'message' => 'Hello Dummy'
]);

print_r($result);
?>
