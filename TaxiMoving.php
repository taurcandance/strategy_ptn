<?php

class TaxiMoving implements RelocationStrategy
{

    private $speed = 100;

    public function calculateTime(Road $road): float
    {
        return $road->getLength() / $this->speed;
    }
}