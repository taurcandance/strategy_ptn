<?php
require_once '../vendor/autoload.php';

const BICYCLE = 1;
const TAXI    = 2;
const BUS     = 3;


$result = new calcTime();
$road = 120;

echo $a = $result->getTime(BUS, $road).'<br />';
echo $b = $result->getTime(TAXI, $road).'<br />';
echo $c = $result->getTime(BICYCLE, $road);

