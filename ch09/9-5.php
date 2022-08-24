<?php
    $servername = "localhost";
    $username = "user";
    $password = "12345";
    $dbname = "sample";

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // $sq에 전체 레코드 검색 명령 저장
    $sql = "select * from friend;";

    $result = mysqli_query($conn, $sql);

    While($row = mysqli_fetch_assoc($result)) {
        echo "name : ".$row["name"]."<br>";
        echo "phone number : ".$row["tel"]."<br>";
        echo "address : ".$row["address"]."<br>";
        echo "-------------<br>";
    }

    mysqli_close($conn);
?>