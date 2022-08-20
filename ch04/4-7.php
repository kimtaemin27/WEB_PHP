<?php
    function hap($n) {
        $sum = 0;
        for($i=1; $i<=$n; $i++) {
            $sum += $i;
        }
        return $sum;
    }

    function haps($n) {
        $sum = 0;
        for($i=1; $i<=$n; $i++) {
            $sum += $i;
        }
    }

    echo "1 ~ 10 : ".hap(10)."<br>";
    echo "1 ~ 100 : ".hap(100)."<br>";

    echo "1 ~ 10 : ".haps(10)."<br>";
    echo "1 ~ 100 : ".haps(100)."<br>";
?>