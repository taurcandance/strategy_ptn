<?php

interface RelocationStrategy
{
    public function calculateTime(Road $road): float ;
}