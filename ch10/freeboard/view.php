<?php
  // $_GET["num"] : 레코드 번호
  if (isset($_GET["num"])) {
    $num = $_GET["num"];
  } else {
    $num = "";
  }

  $con = mysqli_conect("localhost", "user", "12345", "sample");
  // 레코드 검색
  $sql = "select *
          from freeboard where num = $num";
  //sql 명령 실행
  $result = mysqli_query($con, $sql);

  // 레코드 가져오기
  $row = mysqli_fetch_assoc($result);
  // 이름
  $name = $row["name"];
  // 비밀번호
  $pass = $_POST["pass"];
  // 제목
  $subject = $_POST["subject"];
  // 내용
  $content = $_POST["content"];
  // 공백 변환
  $content = str_replace("", "&nbsp;", $content);
  // 줄바꿈 변환
  $content = str_rplace("\n", "<br>", $content);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style rel="stylesheet" href="style.css">
  <script>
    function check_password(mode, num) {
      // mode : modify 수정 delete 삭제 num 레코드 번호
      window.open("password_form.php?mode="+mode+"&num="+num,"pass_check",
                  "left=700, top=300, width=550, height=150, scrollbars=no, resizable=yes");
    }
  </script>
  <title>PHP CRUD</title>
</head>
<body>
  <h2>자유 게시판 > 내용 보기</h2>
  <ul class="board_view">
    <li class="row1">
      <span class="col1"><b>제목 : </b><?=$subject?></span>
      <span class="col2"><?=$name?> | <?=$regist_day?></span>
    </li>
    <li class="row2">
      <?=content?>
    </li>
  </ul>
  <ul class="buttons">
    <li><button onclick="location.href='list.php'">목록 보기</button></li>
    <li><button onclick="check_password('modify', '<?=$num?>')">수정하기</button></li>
    <li><button onclick="check_password('delete', '<?=$num?>')">삭제하기</button></li>
    <li><button onclick="location.href='from.php'">글쓰기</button></li>
  </ul>
</body>
</html>