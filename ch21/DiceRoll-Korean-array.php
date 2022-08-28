<?php
  $roll = rand(1, 6);

  $korean = [
    1 => '하나',
    2 => '둘',
    3 => '셋',
    4 => '넷',
    5 => '다섯',
    6 => '여섯'
  ];

  echo '<p>주사위를 굴려서 나온 숫자 : '.$korean[$roll].'</p>';

  if($roll == 6) {
    echo '<p>win</p>';
  } else {
    echo '<p>next time</p>';
  }
?>