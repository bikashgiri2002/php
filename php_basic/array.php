<?php
    $arr = array("a",1,"4",true,"hello",5.6);
    //true printed as 1
    foreach($arr as $item){
        echo("{$item}\n");
    }
    array_push($arr,"jinu");
    foreach($arr as $item){
        echo("{$item}\n");
    }
    array_pop($arr);
    foreach($arr as $item){
        echo("{$item}\n");
    }
    echo("jay jagannath\n");
    array_shift($arr);
    foreach($arr as $item){
        echo("{$item}\n");
    }
    array_unshift($arr,"aa");
    foreach($arr as $item){
        echo("{$item}\n");
    }
    array_reverse($arr);
    foreach($arr as $item){
        echo("{$item}\n");
    }
    // no changes because array_reverse return new array
    $newArr = array_reverse($arr);
    foreach($newArr as $item){
        echo("{$item}\n");
    }

?>