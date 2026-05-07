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
    public $genre;

    function __construct($_title, $_year, $_director, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->genre = $_genre;
    }

    public function getDetails()
    {
        return "Title: {$this->title} - Year: {$this->year} - Director: {$this->director} - Genre: {$this->genre->name}";
    }
}

$theLordOfTheRings = new Movie("The Lord of the Rings", 2001, "Peter Jackson", new Genre("Fantasy", 124));
$projectHailMary = new Movie("Project Hail Mary", 2026, "Phil Lord and Chris Miller", new Genre("Sci-Fi", 163));

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