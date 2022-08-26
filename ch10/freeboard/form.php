<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP CRUD</title>
  <link rel = "stylesheet" href="style.css">
  <script>
    function check_input() {
      /**
       * 이름 체크
       */
      if(!document.board.name.value) {
        alert("이름을 입력하세요");
        document.board.name.focus();
        return;
      }

      // 비밀 번호 체크
      if(!document.board.pass.value) {
        alert("비밀번호를 입력하세요");
        document.board.pass.focus();
        return;
      }

      // 제목 체크
      if(!document.board.subject.value) {
        alert("제목을 입력하세요");
        document.board.subject.focus();
        return;
      }

      // 내용 체크
      if(!document.board.content.value) {
        alert("내용을 입력하세요");
        document.board.content.focus();
        return;
      }
      
      document.board.submit();
    }
  </script>
</head>
<body>
  <h2>자유 게시판 > 글쓰기</h2>
  <form name="board" method="post" action="insert.php">
    <ul>
      <li>
        <span class="col1">이름 :</span>
        <span class="col2"><input name="name" type="text"></span>
      </li>
      <li>
        <span class="col1">비밀번호 : </span>
        <span class="col2"><input name="pass" type="password"></span>
      </li>
      <li>
        <span class="col1">제목 : </span>
        <span class="col2"><input name="subject" type="text"></span>
      </li>
      <li>
        <span class="col1">내용 : </span>
        <span class="col2">
          <textarea name="content"></textarea>
        </span>
      </li>
    </ul>
    <ul>
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