<?php
    $name = $_GET['name'];
    echo htmlspecialchars($name, ENT_QUOTES, 'utf-8').' 님 홈페이지 방문을 환영합니다';
?>