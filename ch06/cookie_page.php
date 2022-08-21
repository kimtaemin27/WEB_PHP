<h3>cookie login</h3>
<?php
    if(!isset($_COOKIE["userid"])) {
        echo "<a href = 'cookie_login.php'>login</a>";
    } else {
        echo "<a href = 'cookie_logout.php'>logout</a>";
    }
?>