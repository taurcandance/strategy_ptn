<?php

class Taxi implements Strategy
{

    private $speed = 100;

    public function returnTime(int $road): float
    {
        return $road / $this->speed;
    }
}