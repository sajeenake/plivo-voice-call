<?php
require 'vendor/autoload.php';
use Plivo\XML\Response;
$IVR_MESSAGE = "Welcome to the Busibuds Demo app, Press 1 to talk to our Sales representative. Press 2 to talk to our Support representative.";
$NO_INPUT_MESSAGE = "Sorry, I didn't catch that. Please hangup and try again later.";
# This is the message that Plivo reads when the caller inputs a wrong number.
$WRONG_INPUT_MESSAGE = "Sorry, wrong input.";
$r = new Response();
switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
        $getdigits_action_url = "http://f5ed3c91ce7f.ngrok.io/myphpapp/plivo-voice-call/firstbranch.php";
        $params = array(
            'action' => $getdigits_action_url,
            'method' => 'POST',
            'timeout' => '7',
            'numDigits' =>  '1',
            'retries' => '1'
        );

        $getDigits = $r->addGetDigits($params);

        $getDigits->addSpeak($IVR_MESSAGE);


        $r->addSpeak($NO_INPUT_MESSAGE);

        Header('Content-type: text/xml');
        echo ($r->toXML());

        break;
    case "POST":

        $digit = $_REQUEST['Digits'];
        if ($digit == '1') {
            $res_message = "You have pressed 1 to talk to our Sales representative.";
            $r->addSpeak($res_message);
        } else if ($digit == '2') {
              $res_message = "You have pressed 2 to talk to our Support representative.";
            $r->addSpeak($res_message);
        } else {
            $r->addSpeak($WRONG_INPUT_MESSAGE);
        }

        Header('Content-type: text/xml');
        echo ($r->toXML());

        break;
}



