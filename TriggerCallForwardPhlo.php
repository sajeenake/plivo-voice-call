<?php
require 'vendor/autoload.php';
require 'dbconnection.php';
use Plivo\Resources\PHLO\PhloRestClient;
use Plivo\Exceptions\PlivoRestException;
$client = new PhloRestClient("MANDY4YZI2ZGM3NTFLMM", "ZDBlMDY5MzBkMjk3ZGI3Nzg1NzJhZTI2NGYzNjky");

$phlo = $client->phlo->get("024efa62-b530-425d-bacb-056e4640ba6d");
if($forward_number!=0)
{
try {
    $response = $phlo->run(["from" => "+14157778888", "to" => $forward_number]); // These are the fields entered in the PHLO console
    print_r($response);
} catch (PlivoRestException $ex) {
    print_r($ex);
}
}
else
{
	echo "No forwarding numbers are added in the database"
}




?>