<?php 
    //example-1
    $d=strtotime("12:45pm April 17 2024");
    echo "Created date is= ".date("y-m-d h:i:s a", $d);
    //example-2
    $d=strtotime("tomorrow");
    echo date("y-m-d h:i:s a",$d)."<br>";
    $d=strtotime("next Saturday");
    echo date("y-m-d h:i:s a",$d)."<br>";
    $d=strtotime("+3 Months");
    echo date("y-m-d h:i:s a",$d)."<br>";
    //Generate a list of dates starting from the next Saturday and ending six weeks later:-
    $startdate=strtotime("Saturday");
    $enddate=strtotime("+6 weeks",$startdate);
    while($startdate<$enddate){
        echo date("M d", $startdate)."<br>";
        $startdate=strtotime("+1 week",$startdate);
    }
?>