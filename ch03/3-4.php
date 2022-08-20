<?php
    $height = 180;
    $weight = 79;
    $s = ($height - 100)*0.9;

    echo ("height : $height<br>");
    echo ("weight : $weight<br>");

    if($weight > $s){
        echo ("you need diet");
    } else {
        echo ("you need eat");
    }
?>