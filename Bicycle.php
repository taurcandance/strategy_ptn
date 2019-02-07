<?php

class Bicycle implements Strategy
{
    private $speed = 15;

    public function returnTime(int $road): float
    {
        return $road / $this->speed;
    }
}