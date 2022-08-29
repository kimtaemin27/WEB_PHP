<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP CRUD</title>
  <script type="text/javascript" src="check.js"></script>
</head>
<body>
  <h2>자유 게시판 >> 글쓰기</h2>
  <form action="insert.php" method="post" name="board">
    <ul class="board_form">
      <li>
        <span class="col1">이름 : </span>
        <span class="col2">
          <input name="name" type="text">
        </span>
      </li>
      <li>
        <span class="col1">비밀번호 : </span>
        <span class="col2">
          <input type="password" name="pass">
        </span>
      </li>
      <li>
        <span class="col1">제목 : </span>
        <span class="col2">
          <input type="text" name="subject">
        </span>
      </li>
      <li class="area">
        <span class="cal1">내용 :</span>
        <span class="cal2">
          <textarea name="content"></textarea>
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