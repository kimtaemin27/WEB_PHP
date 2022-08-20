<?php
    $score = array(75, 85, 93, 87, 92);

    $length = count($score);
    $sum = 0;

    for($i=0; $i<$length; $i++){
        $sum += $score[$i];
    }

    $avg = $sum/$length;

    echo "sum : ".$sum."<br>";
    echo "avg : ".$avg;
?>