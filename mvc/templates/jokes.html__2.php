<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($error)): ?>
    <p>
        <?=$error?>
    </p>
    <?php else: ?>
        : 텍스트 출력, 폼 출력, 데이터베이스 출력 등
        : 원하는 내용을 보여주는 부분
    <?php endif; ?>
</body>
</html>