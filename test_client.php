<?php 

require_once('oai2client.php');

require "vendor/autoload.php";


$oai2 = new OAI2CLient("0.0.0.0/oai2.php");

$options = array('from' => null,
'until' => null,
'set' => null,
'resumptionToken' => 1589822403132,
'metadataPrefix' => 'oai_dc'); 

echo $oai2->ListRecords($options);