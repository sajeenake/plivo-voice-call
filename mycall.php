<?php
require 'vendor/autoload.php';
use Plivo\RestClient;

$auth_id    = "MANDMYOTRHN2VKZJZMYZ";
$auth_token = "ZDI4ZmRlOGI2ZTExZWU3MjQyOGJiMDhjYjk1MjZl";
$client     = new RestClient($auth_id, $auth_token);

$response = $client->calls->create('+919747086111',
                                 ['+917888354823'],
                                 'http://s3.amazonaws.com/static.plivo.com/answer.xml',
                                 'GET');
print_r($response);
