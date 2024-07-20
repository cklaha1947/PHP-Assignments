<?php
    $car=array("brand"=>"Ford","model"=>"Mustang","year"=>1964);
    var_dump($car);
    //access by key name
    echo $car["model"];
    //loop through an associative array
    foreach ($car as $key => $value) {
        echo "$key : $value <br>";
    }
    //change value
    $car["year"]=2024;
    var_dump($car);
    //add array items
    $cars=array("brand"=>"ford","model"=>"mustang");
    $cars +=["color"=>"red","year"=>1964];
    var_dump($cars);
    //remove items => unset() -method
    $cars1=array("brand"=>"ford","model"=>"mustang","color"=>"red","year"=>1964);
    unset($cars1["color"]);
    var_dump($cars1);
    //array_diff -function
    $cars2=array("brand"=>"Ford","model"=>"Mustang","year"=>1964);
    $newarray=array_diff($cars2, ["Mustang",1964]);
    var_dump($newarray);
?>