<?php
class Movie
{
    public $title;
    public $year;
    public $director;
    public $genres;

    use Rating;

    function __construct($_title, $_year, $_director, $_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genres = $_genres;
    }

    public function getGenres()
    {
        $namesList = [];
        foreach ($this->genres as $genre) {
            $namesList[] = $genre->name;
        }
        $genres = implode(", ", $namesList);

        return "Genres: {$genres}";
    }
}
