<?php
    $x = 1;
    $sum = 0;

    while($x <= 100) {
        if($x %5 == 0) {
            $sum += $x;
        }
        $x++;
    }

    echo "5의 배수 합계 : ".$sum;
?>