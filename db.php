<?php
require_once "./Traits/rating.php";
require_once "./Models/genre.php";
require_once "./Models/movie.php";

$fantasy = new Genre("Fantasy", 124);
$adventure = new Genre("Adventure", 200);
$sciFi = new Genre("Sci-Fi", 146);
$thriller = new Genre("Thriller", 163);

$movies = [
    new Movie("The Lord of the Rings", 2001, "Peter Jackson", [$fantasy, $adventure]),
    new Movie("Project Hail Mary", 2026, "Phil Lord and Chris Miller", [$sciFi, $adventure]),
    new Movie("Oppenheimer", 2023, "Christopher Nolan", [$thriller])
];

$movies[0]->setVote(5);
$movies[1]->setVote(4.6);
$movies[2]->setVote(4.7);
