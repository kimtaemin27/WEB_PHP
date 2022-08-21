<?php
    $str = "&lt;h2&gt;MySQL 은 PHP 와 같이 많이 사용된다&lt;/h3&gt;";
    echo $str."<br>";

    $str2 = htmlspecialchars_decode($str);
    echo $str2;
?>