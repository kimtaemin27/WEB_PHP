<?php
    $score = array(93, 85, 93, 77, 100);

    $sum = array_sum($score);
    $avg = $sum/count($score);

    echo "total : ".$sum."<br>";
    echo "avg : ".$avg;
?>