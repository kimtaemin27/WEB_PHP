<?php
  // 레코드 번호
  $num = $_GET["num"];

  // 127.0.0.1
  $con = mysqli_connect("127.0.0.1", "root", "19273628hsh", "sys");

  // 삭제 명령
  $sql = "delete from freeboard where num=$num";

  // sql 명령 실행
  mysqli_query($con, $sql);

  // DB 접속 해제
  mysqli_close($con);

  // 목록보기 이동
  echo "<script>
          location.href = 'list.php';
        </script>";
?>