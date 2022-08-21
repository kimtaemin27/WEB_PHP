<?php
    $file = fopen("hello2.txt", "w");

    $str = "nice to meet you";
    fwrite($file, $str);

    echo "commit";
    fclose($file);
?>