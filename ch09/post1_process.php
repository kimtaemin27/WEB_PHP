<?php
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $address = $_POST["address"];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3>POST로 전달받은 데이터 출력하기</h3>
    name : <?php echo $name; ?><br>
    phone number : <?php echo $tel; ?><br>
    address : <?php echo $address; ?><br>
</body>
</html>