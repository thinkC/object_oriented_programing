<?php

require_once("WeatherClientApiInterface.php");
class OpenWeatherMapClient implements WeatherClientApiInterface
{
    public function getForecast($city){
        //Call Open Weather Map api using city parameter

        //return some kind of response

        return "It's raining in " . $city;
    }
}
