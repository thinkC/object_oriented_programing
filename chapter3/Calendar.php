<?php

define("YEAR", 2022);

class Calendar
{
    // public $name;
    public string $name;
    // public $weekInYear = 365 / 7;
    public float $weekInYear = 365 / 7;
    public $seasons = ["Spring", "Summer", "Autumn", "Winter"];
    public static $count = 0;
    // public $year = YEAR;
    public int $year = YEAR;

    public function __construct()
    {
        self::$count++;
    }

    // static properties
    // value can change but remains same (static) for class and instances
    public static $daysInFebruary = 28;
    const MONTHS_IN_YEARS = 12;
    

    public function getMonthInYears(){
        return self::MONTHS_IN_YEARS; //get access to constant within a class use self
    }
}

$calendar = new Calendar();
$calendar2 = new Calendar();
$calendar->name = "Your Planner";
// print $calendar->name.PHP_EOL;
print $calendar->name. "<br>";
// print Calendar::MONTHS_IN_YEARS.PHP_EOL;
print Calendar::MONTHS_IN_YEARS. "<br>";
print $calendar->getMonthInYears() . "<br>";
// print Calendar::$daysInFebruary. "<br>";
Calendar::$daysInFebruary++;
print $calendar::$daysInFebruary. "<br>";;
print Calendar::$count. "<br>";

// print_r($calendar->weekInYear = "Fity-two weeks"). "<br>";
print_r($calendar->weekInYear). "<br>";
// print_r($calendar->weekInYear = 52.14). "<br>";
print_r($calendar->year). "<br>";
print_r($calendar->seasons). "<br>";