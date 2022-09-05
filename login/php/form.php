<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/WEB_PHP/login/css/style.css">
    <script src="/WEB_PHP/login/js/nullcheck.js"></script>
</head>
<body>
<form name="member" action="insert.php" method="post">
    <div class="join_form">
		<h2>회원 가입</h2>
    	<ul>
            <li>
                <span class="col1">아이디</span>
                <span class="col2">
                    <input type="text" name="id">
                </span>
                <span class="col3">
                    <button type="button" onclick="check_id()">중복체크</button>
                </span>                    
            </li>
            <li>
                <span class="col1">비밀번호</span>
                <span class="col2">
                    <input type="password" name="pass">
                </span>               
            </li>
            <li>
                <span class="col1">비밀번호 확인</span>
                <span class="col2">
                    <input type="password" name="pass_confirm">
                </span>               
            </li>            
            <li>
                <span class="col1">이름</span>
                <span class="col2">
                    <input type="text" name="name">
                </span>               
            </li>
            <li>
                <span class="col1">이메일</span>
                <span class="col2">
                    <input type="text" name="email">
                </span>               
            </li>                        
            </ul>   
            
            <ul class="buttons">
	        <li>
                <button type="button" onclick="check_input()">저장하기</button>
            </li>
            <li>
                <button type="button" onclick="reset_form()">취소하기</button>
            </li>
        </ul>
    </div>
</form>
</body>
</html>