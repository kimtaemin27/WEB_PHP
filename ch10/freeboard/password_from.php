<?php
  if(isset($_GET["mode"])) {
    $mode = $_GET["mode"];
  } else {
    $mode = "";
  }

  // $_GET["num"] : 레코드 번호
  if(isset($_GET["num"])) {
    $num = $_GET["num"];
  } else {
    $num = "";
  }

  // $_GET["error"] : 에러 발생 시
  if(isset($_GET["error"])) {
    $error = $_GET["error"];
  } else {
    $error = "";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD</title>
</head>
<body>
  <h3>글 작성 시 비밀번호를 입력해 주세요</h3>
  <?php
    if($error == "y") {
      echo "<p?>password is error try agin</p>";
    }
  ?>
  <form action="password.php?mode=<?=$mode?>&num=<?=$num?>" method="post">
    비밀번호 : <input type="password" name="pass">
    <button type="submit">확인</button>
  </form>
</body>
</html>