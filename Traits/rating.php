<?php
trait Rating
{
    public $vote;

    public function setVote($value)
    {
        $this->vote = $value;
    }

    public function getScore()
    {
        return "Rating: {$this->vote}/5⭐";
    }
}
