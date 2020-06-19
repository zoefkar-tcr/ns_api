<?php
if(isset($_GET['station'])){


    $url = 'https://gateway.apiportal.ns.nl/reisinformatie-api/api/v2/arrivals?station=' . $_GET['station'];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTREDIR, 3);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow http 3xx redirects
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Ocp-Apim-Subscription-Key: e7262e1ec5b14af7a497777e00594616'
    ));
?>

<html>
<head>
</head>
<body>
<h1>Reis informatie</h1>
</body>
</html>

<?php
    $resp_orders =curl_exec($ch);

// echo $resp_orders;
// die();

    $json = json_decode($resp_orders);


    foreach ($json->payload->arrivals as $train){
        echo "Vertrek naam: " . $train->name . "<br>";
        echo "Trein: " . $train->product->longCategoryName . "<br>";

        $planned = strtotime($train->plannedDateTime);
        $actual = strtotime($train->actualDateTime);
        $delay = round(($actual - $planned) / 60);
        echo date("H:i", $actual) . " + " . $delay . "<br><br>";
    };

}
?>
