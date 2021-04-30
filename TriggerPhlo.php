<?php
require 'vendor/autoload.php';
use Plivo\Resources\PHLO\PhloRestClient;
use Plivo\Exceptions\PlivoRestException;
$client = new PhloRestClient("MANDY4YZI2ZGM3NTFLMM", "ZDBlMDY5MzBkMjk3ZGI3Nzg1NzJhZTI2NGYzNjky");

//$phlo = $client->phlo->get("1b5ca90b-d752-4a56-ae70-4dc9b2d55eed");
$phlo = $client->phlo->get("15833bba-5135-4cef-b066-6886923ba94b");
try {
    $response = $phlo->run();
    print_r($response);
} catch (PlivoRestException $ex) {
    print_r($ex);
}
