<?php
    $str = "2022-08-21 11:00:00";

    $year = substr($str, 0, 4);
    $month = substr($str, 5, 2);
    $day = substr($str, 8, 2);
    $time = substr($str, 11);

    echo $year."년<br>";
    echo $month."월<br>";
    echo $day."일<br>";
    echo $time;
?>