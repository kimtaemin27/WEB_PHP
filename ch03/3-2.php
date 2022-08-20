<?php
    $pilgi = 65;
    $silgi = 90;
    $result = "불합격";

    if($pilgi >= 70 and $silgi >= 70) {
        $result = "합격";
    }

    echo "pilgi score : ".$pilgi.", silgi score : ".$silgi."<br>";
    echo "result : ".$result."<br>";

    $pilgi = 80;
    echo "pilgi score : ".$pilgi.", silgi score : ".$silgi."<br>";
    echo "result : ".$result;
?>