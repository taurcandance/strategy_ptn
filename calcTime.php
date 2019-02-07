<?php

class calcTime
{
    const BICYCLE = 1;
    const TAXI = 2;
    const BUS = 3;

    private $bus;
    private $taxi;
    private $bicycle;


    public function __construct()
    {
        $this->bicycle = new Bicycle();
        $this->taxi    = new Taxi();
        $this->bus     = new Bus();
    }


    public function getTime($transport, $road)
    {
        if ($transport == self::BICYCLE) {
            return $this->bicycle->returnTime($road);
        }
        if ($transport == self::TAXI) {
            return $this->taxi->returnTime($road);
        }
        if ($transport == self::BUS) {
            return $this->bus->returnTime($road);
        }
    }
}