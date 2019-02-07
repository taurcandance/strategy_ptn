<?php

class BicycleMoving implements RelocationStrategy
{
    private $speed = 15;

    public function calculateTime(Road $road): float
    {
        return $road->getLength() / $this->speed;
    }
}