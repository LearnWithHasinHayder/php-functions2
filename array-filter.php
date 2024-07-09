<?php 

$persons = [
    ['name'=>"John",'age'=>34],
    ['name'=>"Jane",'age'=>23],
    ['name'=>"Joe",'age'=>45],
    ['name'=>'Jimmy','age'=>17]
];

function filterBy25($person){
    return $person['age'] > 25;
}

function filterBy20($person){
    return $person['age'] > 20;
}
//filter person aged more than 25
$adults = array_filter($persons, 'filterBy25');

print_r($adults);


//filter map reduce