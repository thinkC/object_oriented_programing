<?php

Interface WeatherClientApiInterface
{
    //https://rapidapi.com/darkskyapis/api/dark-sky
    public function getForecast(string $city);
  
}

