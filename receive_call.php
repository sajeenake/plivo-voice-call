<?php
    require '../vendor/autoload.php';
    use Plivo\XML\Response;

    $response = new Response();
    $speak_body = "Hello, you just received your first call";
    $response->addSpeak($speak_body);

    Header('Content-type: text/xml');
    echo($response->toXML());
?>