<?php
$roll = rand(1, 6);

  if($roll == 1) {
    $korean = '하나';
  } else if ($roll == 2) {
    $korean = '둘';
  } else if ($roll == 3) {
    $korean = '셋';
  } else if ($roll == 4) {
    $korean = '넷';
  } else if ($roll == 5) {
    $korean = '다섯';
  } else if ($roll == 6) {
    $korean = '여섯';
  }

  echo '<p>주사위를 굴려서 나온 숫자 : '.$korean.'</p>';

  if($roll == 6) {
    echo '<p>win</p>';
  } else {
    echo '<p>next time</p>';
  }
?>