<?php
  if(isset($_GET["num"])) {
    $num = $_GET["num"];
  } else {
    $num = "";
  }

  // 127.0.0.1
  $con = mysqli_connect("127.0.0.1", "root", "19273628hsh", "sys");
  $sql = "select * from freeboard where num = $num";
  // sql 명령 실행
  $result = mysqli_query($con, $sql);

  $row = mysqli_fetch_assoc($result);

  // 이름
  $name = $row["name"];
  // 비밀번호
  $pass = $row["pass"];
  // 제목
  $subject = $row["subject"];
  // 내용
  $content = $row["content"];
  // 작성일
  $regist_day = date("Y-m-d (H:i)");

  mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHPCRUD</title>
  <script type="text/javascript" src="check.js"></script>
</head>
<body>
  <h2>자유게시판 >> 글 수정하기</h2>
  <form action="modify.php?num<?=$num?>" name="board" method="post">
    <ul class="board_form">
      <li>
        <span class="col1">이름 : </span>
        <span class="col2">
          <input name="name" type="text" value="<?=$name?>">
        </span>
      </li>
      <li>
        <span class="col1">비밀번호 : </span>
        <span class="col2">
          <input name="pass" type="password" value="<?$pass?>">
        </span>
      </li>
      <li>
        <span class="col1">제목 : </span>
        <span class="col2">
          <input name="subject" type="text" value="<?=$subject?>">
        </span>
      </li>
      <li class="area">
        <span class="col1">내용 : </span>
        <span class="col2">
          <textarea name="content">
            <?=$content?>
          </textarea>
        </span>
      </li>
    </ul>
    <ul class="buttons">
      <li>
        <button type="button" onclick="check_input()">저장하기</button>
      </li>
      <li>
        <button type="button" onclick="location.href='list.php'">목록보기</button>
      </li>
    </ul>
  </form>
</body>
</html>