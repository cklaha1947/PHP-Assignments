<?php
    $cars=array("volvo","bmw","Toyota");
    var_dump($cars);
    //change value
    $cars[1] = "Ford";
    var_dump($cars);
    //add a new item
    array_push($cars,"Maruti");
    var_dump($cars);
    //access array
    echo $cars[2];
    //Loop through indexed array
    foreach($cars as $x) {
        echo "$x <br>";
    }
    //add multiple array items
    $fruits=array("Apple","Banana","Cherry");
    array_push($fruits,"Orange","kiwi","Lemon");
    var_dump($fruits);
    //Remove array items(array_splice()   and   unset())
    $cars1=array("volvo","bmw","Toyota");
    array_splice($cars1,1,1);
    var_dump($cars1);
?>