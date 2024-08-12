<?php
//arethmetic oporater
    $x = 10;
    $y = 2;
    $output = 0;
    //add +
    $output = $x + $y;
    echo("The output is {$output}\n");
    //substaction (-)
    $output = $x - $y;
    echo("The output is {$output}\n");
    //multiplication(*)
    $output = $x * $y;
    echo("The output is {$output}\n");
    //division(/)
    $output = $x / $y;
    echo("The output is {$output}\n");
    //power(**)
    $output = $x ** $y;
    echo("The output is {$output}\n");
    //modulus(%)
    $output = $x % $y;
    echo("The output is {$output}\n");
    //increment decrement
    $x = 5;
    echo(++$x);
    echo($x--);
    //precidency
    //()
    // **
    // / * %
    // + -
?>