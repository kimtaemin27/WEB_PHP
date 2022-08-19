<?php
    // 국어 성적
    $kor = 80;
    // 영어 성적    
    $eng = 90;
    // 수할 성적
    $math = 100;

    // 합계
    $sum = $kor + $eng + $math;
    // 평균
    $avg = $sum/3;

    echo "국어 : $kor<br>";
    echo "영어 : $eng<br>";
    echo "수학 : $math<br>";
    echo "- 합계 : $sum<br>";
    echo "- 평균 : $avg";
?>