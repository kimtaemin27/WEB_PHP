<?php
  $num = $_GET["num"];

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
  $regist_day = date("Y-m-d (H:i)");

  $con = musqli_content("localhost", "user", "12345", "sample");
  $sql = "update freeboard set name = '$name', pass='$pass', subject='$subject',";
  $sql .= "content='$content', regist_day='$regist_day' where num=$num";

  mysqli_quert($con, $sql);

  musqli_close($con);

  echo "<script> location.href='list.php'; </script>";
?>