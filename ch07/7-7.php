<?php
    class Member {
        private $name;

        public function getName() {
            return $this->name;
        }
    }

    $mem = new Member();

    // 접근 오류
    $mem->name = "taemin";
    echo "name : ".$mem->getName();
?>