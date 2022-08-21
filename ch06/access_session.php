<?php
    session_start();

    if(isset($_SESSION["username"])) {
        echo $_SESSION["username"]." hello";
    } else {
        echo "username is not found";
    }
?>