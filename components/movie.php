<?php

include __DIR__ . '/genre.php';

class Movie
{

    public $title;
    public $description;
    public $genre;
    public $lenguage;



    public function __construct(string $title, Genre $genre, string $lenguage, string $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->genre = $genre;
        $this->lenguage = $lenguage;
    }

    public function get_movie_details()
    {
        $genre = $this->genre->name;
        return "Movie Title: $this->title | description: $this->description | Genre: $genre";
    }
}
