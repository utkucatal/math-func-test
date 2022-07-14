<?php

require_once 'vendor/autoload.php';

use Ucone\MathPartOne;
use Ucone\MathPartTwo;

$x = new MathPartOne();
echo $x-> isSingle(9);
echo $x-> isDouble(6);

$y = new MathPartTwo();
echo $y-> square(2,3);
echo $y-> squareRoot(16);
?>