<?php
    //associative array = An array made of key=>value pairs
    //for example 
    $capital = array("USA"=>"Washington D.C.",
    "Japan"=>"Tokyo",
    "South Korea"=>"Seoul",
    "India"=>"New Delhi");
    echo($capital["USA"]);
    echo($capital["India"]."\n");
    foreach($capital as $key => $value){
        echo("capital of {$key} is {$value}\n");
    }
    // we use array flip to flip values and key
    //for example
    $country = array_flip($capital);
    foreach($country as $key=> $value){
        echo("{$key} is the capital of {$value}\n");
    }
?>