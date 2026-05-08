<?php

class Genre
{
    public $name;
    public $movieCount;

    function __construct($_name, $_movieCount)
    {
        $this->name = $_name;
        $this->movieCount = $_movieCount;
    }
};

class Movie
{
    public $title;
    public $year;
    public $director;
    public $genres;

    function __construct($_title, $_year, $_director, $_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genres = $_genres;
    }

    public function getDetails()
    {
        $namesList = [];

        foreach ($this->genres as $genre) {
            $namesList[] = $genre->name;
        }

        $genres = implode(", ", $namesList);

        return "Title: {$this->title} | {$this->year} | Director: {$this->director} | Genres: {$genres}";
    }
}

$theLordOfTheRings = new Movie("The Lord of the Rings", 2001, "Peter Jackson", [new Genre("Fantasy", 124), new Genre("Adventure", 200)]);
$projectHailMary = new Movie("Project Hail Mary", 2026, "Phil Lord and Chris Miller", [new Genre("Sci-Fi", 163), new Genre("Adventure", 200)]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <h1>Movies</h1>

    <div>
        <?php
        echo $theLordOfTheRings->getDetails();
        echo "<br>";
        echo $projectHailMary->getDetails();
        ?>
    </div>
</body>

</html>