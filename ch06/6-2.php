<?php
    if(isset($_COOKIE["username"])) {
        echo $_COOKIE["username"]." hello";
    } else {
        echo "tae-min cookie is not found";
    }
?>