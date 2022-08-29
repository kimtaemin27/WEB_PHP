<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHPCRUD</title>
</head>
<body>
  <h2>자유 게시판 >> 목록보기</h2>
  <ul class="board_list">
    <li>
      <span class="col1">번호</span>
      <span class="col2">제목</span>
      <span class="col3">글쓴이</span>
      <span class="col4">등록일</span>
    </li>
    <?php
     $con = mysqli_connect("127.0.0.1", "root", "19273628hsh", "sys");
     $sql = "select * from freeboard order by num desc";
    // sql 명령 실행
    $result = mysqli_query($con, $sql);
    // 전체 글 수
    $total_record = mysqli_num_rows($result);

    // 글 번호 매기기
    $number = $total_record;

    // ini_set("display_errors", 0);

    for($i=0; $i<$total_record; $i++) {
      // 레코드 포인터 이동
      mysqli_data_seek($result, $i);
      // 레코드 가져오기
      $row = mysqli_fetch_assoc($result);

      // 레코드 번호
      $num = $row["num"];
      // 이름
      $name = $row["name"];
      // 제목
      $subject = $row["subject"];
      // 작성일
      $regist_day = $row["regist_day"];
    ?>

      <li>
        <span class="col1"><?=$number?></span>
        <span class="col2">
          <a href="view.php?num=<?=$num?>">
            <?= $subject?>
          </a>
        </span>
        <span class="col3"><?=$name?></span>
        <span class="col4"><?=$regist_day?></span>
      </li>

    <?php
        $number--;
      }
      mysqli_close($con);
    ?>
  </ul>
  <ul class="buttons">
    <li>
      <button onclick="location.href='list.php'">목록</button>
    </li>
    <li>
      <button onclick="location.href='form.php'">글쓰기</button>
    </li>
  </ul>
</body>
</html>