<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>아이디 중복 체크</h3>
    <div>
        <?php
            $id = $_GET["id"];

            if(!$id) {
                echo ("아이디를 입력해 주세요");
            } else {
                $con = mysqli_connect("localhost", "dbuser", "19273628hsh", "sample");
                $sql = "SELECT *
                        FROM members
                        WHERE id = '$id'";
                $result = mysqli_query($con, $sql);

                $num_record = mysqli_num_rows($result);

                if($num_record) {
                    echo $id." 아이디는 중복됩니다.<br>";
                    echo "다른 아이디를 사용해 주세요<br>";
                } else {
                    echo $id." 아이디는 사용 가능 합니다.<br>";
                }
                mysqli_close($con);
            }
        ?>
    </div>
    <div class="close">
        <button onclick="javascript:self.close()">창 닫기</button>
    </div>
</body>
</html>