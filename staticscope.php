<?php 


function countx(){
    static $count = 0;
    $count+=2;

    echo "Function has been called {$count} times\n";
}


countx();
countx();
countx();
countx();
countx();


