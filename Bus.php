<?php

class Bus implements Strategy
{
    private $speed = 65;

    public function returnTime(int $road): float
    {
        $time = $road / $this->speed;
        return $time;
    }
}