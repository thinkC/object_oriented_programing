<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    
<?php
require("DarkSkyApiClient.php");
require("OpenWeatherMapClient.php");

// $weatherApiClient = new DarkSkyApiClient();
$weatherApiClient = new OpenWeatherMapClient();
$forecast = $weatherApiClient -> getForecast("Aberdeen");

?>

<h1>Weather App</h1>
<p><?php echo $forecast; ?></p>
</body>
</html>