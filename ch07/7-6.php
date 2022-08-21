<?php
    class Member {
        public $name;

        public function getName() {
            return $this->name;
        }
    }

    $mem = new Member();

    // 외부에서도 접근 가능
    $mem->name = "taemin";
    echo "name : ".$mem->getName();
?>