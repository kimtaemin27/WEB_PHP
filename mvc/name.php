<?php
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];

    echo htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8').' '.htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8').'님, 홈페이지 방문을  환영합니다.';
    // htmlspecialchars 함수는 '특별한 HTML' 문자를 HTML 문자 엔터티로 변환한다
    // http://localhost/mvc/name.php?firstname=Kim&lastname=taemin
?>