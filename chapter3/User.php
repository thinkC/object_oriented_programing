<?php

require_once("DataModel.php");

class User extends DataModel
{
    private string $name;
    private string $username;
    protected string $tableName = "users";
}
