<?php
    $tel = "2022-08-21";
    $tel2 = str_replace("-", "/", $tel);
    echo $tel2."<br>";

    $str = "hello \n nice to meet you";
    $str2 = str_replace("\n", "<br>", $str);
    echo $str2;
?>