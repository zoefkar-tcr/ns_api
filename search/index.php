<?php
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Reisinformatie</title>
</head>
<body>
<!--Link naar stationspage-->
<div class="menu">

    <ul>
        <li><a href="stations.php">Stationsnamen</a></li>
        <li><a href="calamities.php">Meldingen</a></li>
    </ul>
</div>

<!--Dit is een searchbar-->
<div class="wrap">
    <form action="search.php" method="get">
    <div class="search ">
        <input type="text" name="station" class="searchTerm" placeholder="Voer stationscode in...">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
    </form>
</div>



<!--Link naar bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</body>
</html>
<?php
?>