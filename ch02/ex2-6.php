<?php
    // 지불 금액
    $pay = 5000;
    // 물건 가격
    $price = 1000;
    // 구매 개수
    $num = 3;

    // 거스름돈
    $change = $pay - $price * $sum;

    echo "지불 금액 : $pay<br>";
    echo "물건 가격 : $price<br>";
    echo "구매 개수 : $num<br>";
    echo "- 거스름돈 : $change";
?>