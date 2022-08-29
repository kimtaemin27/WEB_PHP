<?php
  // $_GET["num"]) : 레코드 번호
  if(isset($_GET["num"])) {
    $num = $_GET["num"];
  } else {
    $num = "";
  }

  // 127.0.0.1
  $con = mysqli_connect("127.0.0.1", "root", "19273628hsh", "sys");
  // 레코드 검색
  $sql = "select * from freeboard where num = $num";
  // sql 명령 실행
  $result = mysqli_query($con, $sql);

  if (!$result) {
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}

  // 레코드 가져오기
  $row = mysqli_fetch_assoc( $result);
  // 이름
  $name = $row["name"];
  // 제목
  $subject = $row["subject"];
  // 작성일
  $regist_day = $row["regist_day"];
  // 내용
  $content = $row["content"];
  // 공백 변환
  $content = str_replace("", "&nbsp;", $content);
  // 줄바꿈 변환
  $content = str_replace("\n", "<br>", $content);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="recheck.js"></script>
  <title>PHPCRUD</title>
</head>
<body>
  <h2>자유 게시판 >> 내용보기</h2>
  <ul class="board_view">
    <li class="row1">
      <span class="col1">
        <b>제목 : </b>
        <?=$subject?>
      </span>
      <span class="col2">
        <?=$name?>
      </span>
    </li>
    <li class="row2">
      <?=$content?>
    </li>
  </ul>
  <ul class="buttons">
    <li>
      <button onclick="location.href='list.php'">목록보기</button>
    </li>
    <li>
      <button onclick="check_password('modify','<?=$num?>')">수정하기</button>
    </li>
    <li>
      <button onclick="check_password('delete','<?=$num?>')">삭제하기</button>
    </li>
    <li>
      <button onclick="location.href='form.php'">글쓰기</button>
    </li>
  </ul>
</body>
</html>