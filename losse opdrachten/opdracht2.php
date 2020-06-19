<?php
$url = "https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/arrivals?station=ZL";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow http 3xx redirects
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Ocp-Apim-Subscription-Key: 41fbfefd81cb4fb89a29d05f6e95d7a1'
));

$resp_orders = curl_exec($ch);

echo $resp_orders;
die();

$json = json_decode($resp_orders);

foreach ($json->payload as $station) {
    echo $station->code .  "<br>";
}