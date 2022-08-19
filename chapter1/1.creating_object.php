<?php

class User
{
    public $name;
    public $username;
    public $followerCount;
}


$tundeObject = new User();
$tundeObject -> name = "Tunde";
$tundeObject -> username = "@tunde";
$tundeObject -> followerCount = 100;

print_r($tundeObject);