<?php
    $file = fopen("data.csv", "r");
    $header = fgetcsv($file);
    $num = count($header);
    echo "<h3>5명의 학생의 ".$num." 과목 합계/평균 구하기</h3>";

    while(!feof($file)) {
        $sum = 0;
        $line = fgetcsv($file);
        foreach ($line as $v) {
            $sum += $v;
        }
        $avg = round($sum/3, 2);
        echo "sum : ".$sum.", avg : ".$avg."<br>";
    }
    fclose($file);
?>