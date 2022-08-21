<?php
    $current_time = time();

    $time_diff = 2 * 24 * 60 * 60;
    $before_1day = $current_time - $time_diff;
    $after_1day = $current_time + $time_diff;

    echo "now time stamp : ".$current_time."<br>";
    echo "now time : ".date("Y-m-d H:i:s", $current_time)."<br>";
    echo "---------------------------<br>";

    echo "2 day ago time stamp : ".$before_1day."<br>";
    echo "2 day ago time : ".date("Y-m-d H:i:s", $before_1day)."<br>";
    echo "---------------------------<br>";

    echo "2 day after time stamp : ".$after_1day."<br>";
    echo "2 day after time : ".date("Y-m-d H:i:s", $after_1day)."<br>";
?>