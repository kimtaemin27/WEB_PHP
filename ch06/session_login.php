<?php
    session_start();
    $_SESSION["userid"] = "kim123";
    $_SESSION["username"] = "taemin";

    echo "<script>
            location.href = 'session_page.php';
         </script>";
?>