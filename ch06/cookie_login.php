<?php
    setcookie("userid", "kim123", time() + 3 * 60);

    echo "<script>
            location.href = 'cookie_page.php';    
         </script>";
?>