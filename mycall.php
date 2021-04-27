<?php
require 'vendor/autoload.php';
use Plivo\RestClient;

$auth_id    = "MANDMYOTRHN2VKZJZMYZ";
$auth_token = "ZDI4ZmRlOGI2ZTExZWU3MjQyOGJiMDhjYjk1MjZl";
$client     = new RestClient($auth_id, $auth_token);

$response = $client->calls->create('+917888354823',
                                 ['+919747086111'],
                                 'http://f5ed3c91ce7f.ngrok.io/myphpapp/plivo-voice-call/answer.xml',
                                 'GET');
print_r($response);
