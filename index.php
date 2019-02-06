<?php

use Math\Math;

require_once '../vendor/autoload.php';

const SUM       = 1;
const COMPOSITE = 2;

$result = new Math();


echo $result->getSum(2, 5, 3).'<br />';
echo $result->getComposite(2, 5, 3);
$obs = new SplObjectStorage();

