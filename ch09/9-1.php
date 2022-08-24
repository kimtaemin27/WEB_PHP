<?php
    $servername = "localhost";
    $username = "user";
    $password = "12345";
    $dbname = "sample";

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // 연결 체크하기
    if(!$conn) {
        die("연결 오류 : ".mysqli_connect_error());
    }

    echo "MySQL 에 성공적으로 연결";
?>