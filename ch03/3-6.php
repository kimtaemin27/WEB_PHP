<?php
    $now_year = 2022;
    $now_month = 8;
    $now_day = 20;

    $birth_year = 1997;
    $birth_month = 12;
    $birth_day = 18;

    if($birth_month < $now_month) {
        $age = $now_year - $birth_year;
    } else if($birth_month == $now_month) {
        if($birth_day <= $now_day) {
            $age = $now_year - $birth_year;
        } else {
            $age = $now_year - $birth_year -1;
        }
    } else {
        $age = $now_year - $birth_year - 1;
    }

    echo "todays date : ".$now_year."/".$now_month."/".$now_day."<br>";
    echo "birthday : ".$birth_year."/".$birth_month."/".$birth_day."<br>";
    echo "만나이 : ".$age." 세";
?>