<?php
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

  $con = mysqli_conect("localhost", "user", "12345", "sample");

  $sql = "insert into freeboard (
          name,
          pass,
          subject,
          content,
          regist_day)";

  // 레코드 삽입 명령
  $sql .= "values('$name', '$pass', '$subject', '$content', '$regist_day')";

  // $sql에 저장된 명령 실행
  mysqli_query($con, $sql);

  // DB 연결 끊기
  mysqli_close($con);

  // 목록 페이지로 이동
  echo "<script>
          location.href = 'list.php';
        </script>";
?>