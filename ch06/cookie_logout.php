<?php
    // delete cookie
    setcookie("userid", "", time() - 3600);

    echo "<script>
            location.href = 'cookie_page.php';
         </script>";
?>