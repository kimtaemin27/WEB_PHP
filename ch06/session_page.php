<h3>session used login</h3>
<?php
    session_start();

    if(!isset($_SESSION["userid"])) {
        echo "<a href='session_login.php'>login</a>";
    } else {
        echo $_SESSION["username"]." sr"." |<a href='session_logout.php'> logout</a>";
    }
?>