<?php

$numbers = [12, 23, 45, 14, 56, 34, 17, 21, 45, 78, 77, 98, 53, 15];

$evenNumbers = array_filter($numbers, function($number) { //anonymous function, closure, lambda function
    if ($number % 2 ==0){
        return true;
    }
    return false;
});

function filterEvenNumbers($number){
    if ($number % 2 ==0){
        return true;
    }
    return false;
}
//odd number
function filterOddNumbers($number){
    if ($number % 2 ==1){
        return true;
    }
    return false;
}

$evenNumbers = array_filter($numbers, 'filterEvenNumbers');
$oddNumbers = array_filter($numbers, 'filterOddNumbers');

print_r($evenNumbers);
print_r($oddNumbers);