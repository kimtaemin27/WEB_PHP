<?php
  // form.php 에서 post 로 넘겨줘서 post 로 받는다
  // 이름
  $name = $_POST["name"];
  // 비밀번호
  $pass = $_POST["pass"];
  // 제목
  $subject = $_POST["subject"];
  // 내용
  $content = $_POST["content"];

  $subject = htmlspecialchars($subject, ENT_QUOTES);
  $content = htmlspecialchars($content, ENT_QUOTES);
  // UTC 기준 년 월 일 시 분
  $regist_day = date("Y-m-d (H:i)");

  // 127.0.0.1
  $con = mysqli_connect("127.0.0.1", "root", "19273628hsh", "sys");

  if ($con->connect_error) {
    die("연결 실패 : " .$con->connect_error); // 연결 실패 시 원인을 출력한다
  } else {
    echo "연결 성공"; // 연결 성공 시 웹 페이지 좌상단에 연결 성공이라는 문구를 출력한다
  }

  $sql = "insert into freeboard (
            name,
            pass,
            subject,
            content,
            regist_day
            )";
  $sql .= "values('$name', '$pass', '$subject', '$content', '$regist_day')";

  // $sql 에 저장된 명령 실행
  mysqli_query($con, $sql);

  // DB 연결 끊기
  mysqli_close($con);

  // 목록 페이지로 이동
  echo "<script>
          location.href = 'list.php';
        </script>";
?>

