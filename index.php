<?php
require_once '../vendor/autoload.php';

$road = new Road();
$busMoving = new BusMoving();
$transport = new RoadAnalizer($busMoving);
echo $transport->calcMovingTime($road).'<br/>';

$taxiMoving = new TaxiMoving();
$transport->changeMovingStrategy($taxiMoving);
echo $transport->calcMovingTime($road);