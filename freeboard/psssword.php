<?php
  // modify : 수정
  // delete : 삭제
  $mode = $_GET["mode"];
  // 레코드 번호
  $num = $_GET["num"];
  // 비밀번호
  $pass = $_POST["pass"];

  // 127.0.0.1
  $con = mysqli_connect("127.0.0.1", "root", "19273628hsh", "sys");
  
  $sql = "select pass
          from freeboard where num = $num";
  // $sql 에 저장된 명령 실행
  $result = mysqli_query($con, $sql);

  // 레코드 가져오기
  $row = mysqli_fetch_assoc($result);
  // DB 비밀번호
  $db_password = $row["pass"];
  // DB 연결 끊기
  mysqli_close($con);

  // $pass : 입력 비밀번호
  // $db_password : DB 저장 비밀번호
  if($pass == $db_password) {
    if($mode == "modify") {
      $url = "modify_form.php?num=$num";
    } else {
      $url = "delete.php?num=$num";
    }

    echo "<script>
            self.close();
            opener.location.href = '$url';
          </script>";
  } else {
    // 입력 비밀번호가 DB 비밀번호와 다를 경우
    echo "<script>
            location.href='password_form.php?num=$num&error=y';
          </script>";
  }
?>