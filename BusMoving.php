<?php

class BusMoving implements RelocationStrategy
{
    private $speed = 65;

    public function calculateTime(Road $road): float
    {
        $time = $road->getLength() / $this->speed;
        return $time;
    }
}