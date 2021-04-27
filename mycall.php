<?php
require 'vendor/autoload.php';
use Plivo\RestClient;

$auth_id    = "MANDMYOTRHN2VKZJZMYZ";
$auth_token = "ZDI4ZmRlOGI2ZTExZWU3MjQyOGJiMDhjYjk1MjZl";
$client     = new RestClient($auth_id, $auth_token);

$response = $client->calls->create('+917888354823',
                                 ['+919747086111'],
                                 'https://99e6d769c0bd.ngrok.io/myphpapp/plivo-voice-call/answer.xml',
                                 'GET');
print_r($response);
