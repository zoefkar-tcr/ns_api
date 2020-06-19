<?php
$url = 'https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/stations';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTREDIR, 3);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow http 3xx redirects
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Ocp-Apim-Subscription-Key: e7262e1ec5b14af7a497777e00594616'
));


//echo $resp_orders;
//die();


$resp_orders =curl_exec($ch);
$json = json_decode($resp_orders);

foreach ($json->payload as $station){
    echo 'Stationnaam: '. $station->namen->lang . "<br>";
    echo 'Stationcode: '.$station->code . "<br>";
    echo 'Land: '.$station->land . "<br>";
    echo 'Typestation: '.$station->stationType . "<br>";
    echo '<br>';
};
