<?php
  $name = $_POST["name"];
  $tel = $_POST["tel"];
  $address = $_POST["address"];

  $servername = "localhost";
  $username = "user";
  $password = "12345";
  $dbname = "sample";

  // MySQL 연결하기
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $sql = "insert into friend (name, tel, address)
          values ('$name', '$tel', '$address');";
  $result = mysqli_query($conn, $sql);

  if($result) {
    echo "friend table insert sucess";
  } else {
    echo "friend table insert fail".mysqli_error($conn);
  }
  mysqli_close($conn);
?>