
<html lang="">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">

    <title>Search</title>
</head>
<body>
<!--Dit is een searchbar-->
<div class="wrap">
    <form action="search.php" method="get">
    <div class="search ">
        <input type="text" name="station" class="searchTerm" placeholder="Voor station naam in...">
        <button type="submit" class="searchButton">
            <i class="fa fa-search"></i>
        </button>
    </div>
    </form>
</div>

<!--Link naar stationspage-->
<div class="menu">
    <ul>
        <li><a href="stations.php">Stationsnamen</a></li>
    </ul>
</div>

<!--Link naar bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</body>
</html>

