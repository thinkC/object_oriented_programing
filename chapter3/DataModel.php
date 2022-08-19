<?php

//abstracted classes are extended
abstract class DataModel
{
    protected string $tableName = "random-table-name";

    public function save(){
        print("saving data  to table: " . $this->tableName);
    }
}