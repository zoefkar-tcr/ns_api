<?php

$url = 'https://gateway.apiportal.ns.nl/reisinformatie-api/api/v1/calamities?lang=NL';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow http 3xx redirects
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Ocp-Apim-Subscription-Key: e7262e1ec5b14af7a497777e00594616'
));

$resp_orders =curl_exec($ch);

echo $resp_orders;
die();



//$json = json_decode($resp_orders);
//
//foreach ($json->payload as $station){
//    echo $station->code . "<br>";
//    echo $station->namen->kort . "<br>";
//    echo '<br>';
//};