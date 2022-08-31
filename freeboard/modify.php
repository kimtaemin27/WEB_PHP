<?php
  $num = $_GET["num"];

  $name = $_POST["name"];
  $pass = $_POST["pass"];
  $subject = $_POST["subject"];
  $content = $_POST["content"];

  $subjet = htmlspecialchars($subject, ENT_QUOTES);
  $content = htmlspecialchars($content, ENT_QUOTES);
  $regist_day = date("Y-m-d (H:i)");

  // 127.0.0.1
  $con = mysqli_connect("127.0.0.1", "root", "19273628hsh", "sys");
  // 수정 명령
  $sql = "update freeboard set name='$name', pass='$pass', subject='$subject',";
  $sql .= "content='$content', regist_day='$regist_day' where num=$num";

  // sql 명령 실행
  mysqli_query($con, $sql);

  mysqli_close($con);

  echo "<script>
          location.href = 'list.php';
        </script>";
?>