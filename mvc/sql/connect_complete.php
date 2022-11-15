<?php
    try {
        $pdo = new PDO('mysql:host=localhost;
                        dbname=ijdb;
                        charset=utf8', 
                        'root', 
                        '19273628hsh');
        # PDO 객체의 오류처리 방식을 예외 발생으로 설정한다는 의미 - > 방향
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $output = '데이터베이스 접속 성공.';
    } catch (PDOException $e) {
        $output = '데이터베이스 서버에 접속할 수 없습니다: '.$e;
    }

    include __DIR__.'/../templates/output.html.php';
?>