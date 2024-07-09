<?php

//5 = 5x4x3x2x1 = 120
function getFactorialRecursively($number) {

    if ($number == 1) {
        return 1;
    } else {
        return $number * getFactorialRecursively($number - 1);
    }

}

function getFactorialWithFoorLoop($number) {
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial = $factorial * $i;
    }

    return $factorial;
}

// echo getFactorialRecursively(5);
echo getFactorialWithFoorLoop(5);