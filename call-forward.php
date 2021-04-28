<?php
require 'vendor/autoload.php';

use Plivo\XML\Response;

// Feth the from_number from the URL
$from_numbr = $_REQUEST['From'];
$r = new Response();

// Add Dial tag
$params = array(
    'callerId' => $from_numbr # Caller ID
);

$d = $r->addDial($params);
$number = "2222222222";
$d->addNumber($number);

Header('Content-type: text/xml');
echo ($r->toXML());
