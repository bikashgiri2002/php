<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if the variable is not declared, false, null, ""
    //example
    //declared no value
    echo("declared no value\n");
    $a;
    echo("isset()\n");
    if(isset($a)){
        echo("TRUE\n");
    }else{
        echo("FALSE\n");
    }
    echo("empty()\n");
    if(empty($a)){
        echo("TRUE\n");
    }else{
        echo("FALSE\n");
    }
    //declared with value
    echo("declated with value\n");
    $b = 1;
    echo("isset()\n");
    if(isset($b)){
        echo("TRUE\n");
    }else{
        echo("FALSE\n");
    }
    echo("empty()\n");
    if(empty($b)){
        echo("TRUE\n");
    }else{
        echo("FALSE\n");
    }
    //not declared
    echo("not declared\n");
    echo("isset()\n");
    if(isset($c)){
        echo("TRUE\n");
    }else{
        echo("FALSE\n");
    }
    echo("empty()\n");
    if(empty($c)){
        echo("TRUE\n");
    }else{
        echo("FALSE\n");
    }
?>