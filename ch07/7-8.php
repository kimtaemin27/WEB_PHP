<?php
    class Member {
        private $name;

        public function setName($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    $mem = new Member();

    $mem->setName("taemin");
    echo "name : ".$mem->getName();
?>