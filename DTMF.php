<?php

 require 'vendor/autoload.php';
 use Plivo\XML\Response;




$response = new Response();
	
	 $digit = 1;
        
        
        if ($digit=="1") {
            $bal_message = "Your account balance is $20.";
            $response->addSpeak($bal_message);
        } elseif($digit=="2") {
            $stat_message = "Your account status is active.";
            $response->addSpeak($stat_message);
        } elseif($digit=="3") {
            $get_input = $response->addGetInput(
                        [
                            'action' => "https://99e6d769c0bd.ngrok.io/myphpapp/plivo-voice-call/secondbranch.php",
                            'method' => "POST",
                            'digitEndTimeout' => "5",
                            'inputType' => "dtmf",
                            'redirect' => "true",
                        ]);
            $get_input->addSpeak($representative_branch, ['language'=>"en-US", 'voice'=>"Polly.Salli"]);
        } else {
            $response->addSpeak($no_input);
        } 
        $xml_response = $response->toXML(); 
        return response($xml_response, 200)->header('Content-Type', 'application/xml');