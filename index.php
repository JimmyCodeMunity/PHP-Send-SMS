<?php
require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'fibororeminder'; // use 'sandbox' for development in the test environment
$apiKey   = '541ad11c4896b6505fa4507a1b55699836d9f268a57e5b1c2eb3cde032de39f7'; // use your sandbox app API key for development in the test environment
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