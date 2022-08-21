<?php
    // 클래스 정의
    class Person {
        // 속성
        public $name;
        // 속성
        public $age;

        // 메소드
        public function intro() {
            echo "name : ".$this->name." age : ".$this->age;
        }

    }

    // 객체 생성
    $kim = new Person();

    $kim->name = "kim tae min";
    $kim->age = 26;

    $kim->intro();
?>