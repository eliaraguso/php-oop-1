<?php
class Movie {
    private $title;
    private $releaseDate;
    private $director;
    private $genre;

    function __construct($_title, $_releaseDate, $_director, $_genre)
    {
        $this->title = $_title;
        $this->releaseDate = $_releaseDate;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getReleaseDate() {
        return $this->releaseDate;
    }

    function getDirector()
    {
        return $this->director;
    }

    function getGenre()
    {
        return $this->genre;
    }
};