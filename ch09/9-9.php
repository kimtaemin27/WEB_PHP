<?php
    $servername = "localhost";
    $username = "user";
    $password = "12345";
    $dbname = "sample";

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // $sql에 '박성찬' 레코드를 삭제하는 명령 저장
    $sql = "delete from friend where name ='박성찬';";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo "sucess";
    } else {
        echo "fail".mysqli_error($conn);
    }

    mysqli_close($conn);
?>