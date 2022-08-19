<?php
require_once("WeatherClientApiInterface.php");
class DarkSkyApiClient implements WeatherClientApiInterface
{
    public function getForecast(string $city)
    {
        // Get lat and long of city

        // Call Dark Sky using lat / long

        // return some kind of response
        return "It's raining in " . $city;
    }
}


