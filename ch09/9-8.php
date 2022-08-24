<?php
    $servername = "localhost";
    $username = "user";
    $password = "12345";
    $dbname = "sample";

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // $sql 에 num 필드가 1인 레코드의 Name 을 변경하는 명령 저장
    $sql = "update friend set name = '김길동' where num = 1;";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "sucess";
    } else {
        echo "fail".mysqli_error($conn);
    }

    mysqli_close($conn);
?>