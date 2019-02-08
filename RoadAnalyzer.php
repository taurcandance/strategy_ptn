<?php

class RoadAnalyzer
{
    private $relocationStrategy;

    public function __construct(RelocationStrategy $strategy)
    {
        $this->relocationStrategy = $strategy;
    }

    public function calcMovingTime(Road $road)
    {
        return $this->relocationStrategy->calculateTime($road);
    }

    public function changeMovingStrategy(RelocationStrategy $strategy)
    {
        return $this->relocationStrategy = $strategy;
    }
}