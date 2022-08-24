<?php
    $servername = "localhost";
    $username = "user";
    $password = "12345";
    $dbname = "sample";

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // $sql 에 전체 레코드를 이름 순 정렬 명령 저장
    $sql = "select * from friend order by name;";
    $result = mysqli_query($conn, $sql);

    echo "--------<br>";
    echo "name , cellphone<br>";
    echo "--------<br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["name"]."".$row["tel"]."<br>";
    }
    echo "--------<br>";

    mysqli_close($conn);
?>