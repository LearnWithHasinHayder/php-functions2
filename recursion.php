<?php
//recursion
//recursive function
function recursivelyReduceAndPrint($number) {
    echo "Current Number = $number\n";
    $number = $number - 1;
    if ($number > 0) { //exit condition
        recursivelyReduceAndPrint($number);
    }
}

//forloop
function reduceAndPrintWithForLoop($number){
    for ($i = $number; $i > 0; $i--) {
        echo "Current Number = $i\n";
    }
}

// recursivelyReduceAndPrint(5);
reduceAndPrintWithForLoop(5);