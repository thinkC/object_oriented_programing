<?php
class Connection
{
    private static int $count = 0;

    // @var string connection identifier
    private string $connectionId;

    private int $conferenceId = 1234;


    public function __construct()
    {
        self::$count++;
    }

    // The destructor method will be called as soon as there are no  other references
    //to a particular object
    //or in any order during the shutdownnsequence
    public function __destruct()
    {
        self::$count--;
    }

    // another way of gething the connectionId.
//assuming there is a growing list of the private and protected properties
//a more efficient way of accessing these properites other than getConnectionId below is:
//The __get() is used to get for reading data from inaccessible (proctected or private) properties

    public function __get($name) // -> $connectionId, $conferenceId, whatever...
    {
        return $this->$name; //returns the name of the property you are trying to access.
    }
    public function getCount(){
        return self::$count;
    }

    // The string representation of an object
    //__toString() method allows a class to decide how it will
    //react when it is treated lie a string for example, what echo
    //$obj; will print.
    public function __toString()
    {
        return "Conference ID: {$this->conferenceId} <br> Connection ID: {$this->connectionId}";
    }

public function setConnectionId($ipAddress){
    if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
        $this->connectionId = $ipAddress . '_'. self::$count;
        return;
    }
    die("Not a valid ip address");
}

//one method of gething the connection id
// public function getConnectionId(){
//     return $this->connectionId;
// }
}



