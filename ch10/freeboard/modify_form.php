<?php
  if(isset($_GET["num"])) {
    $num = $_GET["num"];
  } else {
    $num = "";
  }

  $con = mysqli_connect("localhost", "user", "12345", "sample");
  $sql = "select * from freeboard where num = $num";
  // SQL 명령 실행
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
  <link rel="stylesheet" href="./style.css">
  <title>PHP CRUD</title>
  <script>
  	function check_input() {
		if (!document.board.name.value) {		// 이름 체크
          	alert("이름을 입력하세요!");
          	document.board.name.focus();
          	return;
		}		  
		if (!document.board.pass.value) {		// 비밀번호 체크
          	alert("비밀번호를 입력하세요!");    
          	document.board.pass.focus();
          	return;
      	}			
      	if (!document.board.subject.value) {	// 제목 체크
          	alert("제목을 입력하세요!");
          	document.board.subject.focus();
          	return;
		}
      	if (!document.board.content.value) {	// 내용 체크
          	alert("내용을 입력하세요!");    
          	document.board.content.focus();
          	return;
      	}
	  
      	document.board.submit();
   	}
  </script>
</head>
<body>
  <h2>자유 게시판 >> 글 수정하기</h2>
  <form name="board" method="post" action="modify.php?num=<?=$num?>">
    <ul class="board_form">
      <li>
        <span class="col1">이름 :</span>
        <span class="col2"><input name="name" type="text" value="<?=$name?>"></span>
      </li>
      <li>
        <span class="col1">비밀번호 : </span>
        <span><input name="pass" type="password" value="<?=$pass?>"></span>
      </li>
      <li>
        <span class="col1">제목 : </span>
        <span class="col2"><input name="subject" type="text" value="<?=$subejct?>"></span>
      </li>
      <li class="area">
        <span class="col1">내용 : </span>
        <span class="col2"><textarea name="content"><?=$content?></span>
      </li>
    </ul>
    <ul class="buttons">
      <li>
        <buttons type="button" onclick="check_input()">저장하기</button>
      </li>
      <li>
        <button type="button" onclick="location.href='list.php'">목록보기</button>
      </li>
    </ul>
</form>
</body>
</html>