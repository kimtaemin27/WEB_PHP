<?php
    // 아이디
    $id = $_POST["id"];
    // 비밀번호
    $pass = $_POST["pass"];
    // 이름
    $name = $_POST["name"];
    // 이메일
    $email = $_POST["email"];

    // 가입 일자
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "dbuser", "19273628hsh", "sample");

    $sql = "INSERT INTO members ( id, pass, name, email, regist_day, level, point)";
    $sql.= "values ('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

    mysqli_query($con, $sql);
    mysqli_close($con);

    // 로그인 폼으로 이동
    echo "<script>
            location.href = 'login_form.php';
        </script>";
?>