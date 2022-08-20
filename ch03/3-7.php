<?php
    $my_color = "yellow";

    switch($my_color) {
        case "red":
            echo "i like ".$my_color;
            break;
        case "yellow":
            echo "i like ".$my_color;
            break;
        case "blue":
            echo "i like ".$my_color;
            break;
        default:
            echo $my_color." is not my favorite color";
    }
?>