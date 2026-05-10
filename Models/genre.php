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
}
