<?php
    # isset 함수는 특정 변수나 배열에 값이 할당되어 있는지 알려준다
    if(!isset($_POST['firstname'])) {
        include __DIR__. '/templates/form.html.php';
    } else {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];

        if($firstName == 'taemin' && $lastName == 'Kim') {
            $output = '환영합니다, 관리자님';
        } else {
            $output = htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8').' '.htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8').'님 방문을 환영합니다.';
        }

        include __DIR__.'/templates/welcome.html.php';
    }
?>