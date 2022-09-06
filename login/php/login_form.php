<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/WEB_PHP/login/css/style.css">
    <script src="/WEB_PHP/login/js/logincheck.js"></script>
</head>
<body>
    <h2 class="login_title">로그인</h2>
    <form name="login" method="post" action="login.php">
        <ul class="login_form">
            <li>
                <span class="col1">아이디</span>
                <span class="col2">
                    <input type="text" name="id" placeholder="아이디">
                </span>
            </li>
            <li>
                <span class="col1">비밀번호</span>
                <span class="col2">
                    <input type="password" name="pass" placeholder="비밀번호">
                </span>
            </li>
            <li>
                <button type="button" onclick="check_input()">로그인</button>
            </li>
        </ul>
    </form>
</body>
</html>