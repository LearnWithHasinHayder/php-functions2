<?php 

$name = "John Doe";

function greet($person){
    $person = "Jane Doe";
    $greet = "Hello {$person}<br/>";
    echo $greet;
}

greet("john@doe.com");

echo $name;

