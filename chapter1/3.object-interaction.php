<?php

// take a song object and add it to playlist object
class Song
{
    public $songId;
    public $songTitle;
}

$hushAby = new Song();
$hushAby -> songId = 12376;
$hushAby -> songTitle = "Hush-a-by(Come Unto Me And Rest)";
// var_dump($hushAby);


class Playlist
{
    public $name;
    public $songs = [];

    function addSong($hushAby){
        $this -> songs[] = $hushAby;
    }
}

$playlist = new Playlist();
$playlist -> name = "Evensong";
$playlist -> addSong($hushAby);
// var_dump($playlist);
var_dump($playlist ->songs);