<?php
    $x = sqrt(6);
    echo($x);
    $y = pow($x,2);
    echo("\n{$y}is ans");
    for($i = 1; $i < 20 ; $i++){
        $random = rand(-1,6);
        echo($random."\n");
    }
?>