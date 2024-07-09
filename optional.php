<?php 

function calculateTax(Int $amount, Int $taxPercentage=10){
    return $amount * $taxPercentage / 100;
}

echo calculateTax(2000,12);

//parameter, argument 
