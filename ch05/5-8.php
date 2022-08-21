<?php
    $tel = "123-1234-1234";
    $arr = explode("-", $tel);

    $tel2 = $arr[0].$arr[1].$arr[2];
    echo $tel2;
?>