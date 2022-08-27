<?php
  // 이름
	$name = $_POST["name"];		
  // 비밀번호		
	$pass = $_POST["pass"];		
  // 제목		
  $subject = $_POST["subject"];
  // 내용		
  $content = $_POST["content"];		

  // 제목 HTML 특수문자 변환
	$subject = htmlspecialchars($subject, ENT_QUOTES);	
  // 내용 HTML 특수문자 변환
	$content = htmlspecialchars($content, ENT_QUOTES);
  // UTC 기준 현재의 '년-월-일 (시:분)'
	$regist_day = date("Y-m-d (H:i)");  

  // DB 연결
	$con = mysqli_connect("localhost", "user", "12345", "sample");	

  // 레코드 삽입 명령
	$sql = "insert into freeboard (name, pass, subject, content, regist_day) ";	
	$sql .= "values('$name', '$pass', '$subject', '$content', '$regist_day')";

  // $sql에 저장된 명령 실행
	mysqli_query($con, $sql);  

  // DB 연결 끊기
	mysqli_close($con);       

	// 목록 페이지로 이동
	echo "<script>
	        location.href = 'list.php';
	      </script>";
?>