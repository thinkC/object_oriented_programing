<?php

// use CsvFileReader as GlobalCsvFileReader;

// use CsvFileReader as GlobalCsvFileReader;

require_once("FileReaderInterface.php");
class CsvFileReader implements FileReaderInterface
{
    public function readFileAssociativeArray(string $filename): array
    {
        // Get the rows from the file as array
        $rows = array_map('str_getcsv', file($filename));
        // print_r($rows) ;
        echo "<br>";
        //seperate the header
        $header = array_shift($rows);
        // print_r($header);
        echo "<br>";
        $items = [];
        //create an associative array, using header values as keys
        foreach ($rows as $row) {
            $items[] = array_combine($header, $row);
        }
        // return the associative array
        // print_r($items);
        return $items;
    }
}

$fileReader = new CsvFileReader();
$items = $fileReader->readFileAssociativeArray('inventory.csv');
print_r($items);