<?php
    $servername = "localhost";
    $username = "user";
    $password = "12345";
    $dbname = "sample";

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // friend 테이블에 데이터 삽입
    $sql = "insert into friend(name, tel, address)
            values ('홍길동', '01012345678', '경기도 권선구 수원시 온정로 123');";
    
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "sucess";
    } else {
        echo "fale";
    }

    mysqli_close($conn);
?>