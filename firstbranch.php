<?php
require 'vendor/autoload.php';

 use Plivo\XML\Response;


$PLIVO_SONG = "https://s3.amazonaws.com/plivocloud/music.mp3";


$IVR_MESSAGE = "Welcome to the demo app, Press 1 for your account balance. Press 2 for your account status. Press 3 to talk to our representative.";



$NO_INPUT_MESSAGE = "Sorry, I didn't catch that. Please hangup and try again later.";


$WRONG_INPUT_MESSAGE = "Sorry, wrong input.";


$r = new Response();



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

   

?>

