<?php

class Song{
    public $songID;
    public $songTitle;

    
}

$theLordIsMySalvation = new Song();
$theLordIsMySalvation->songID = 1;
$theLordIsMySalvation->songTitle = "The Lord is my salvation";
// var_dump($theLordIsMySalvation);

class PlayList 
{
    public $name;
    public $songs = [];

    public function addSong($song)
    {
        $this->songs = $song;
    }
}

$playlist = new PlayList();
$playlist->name = "Facing A Task Unfinished";
$playlist->addSong($theLordIsMySalvation);
var_dump($playlist);