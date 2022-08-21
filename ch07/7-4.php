<?php
    class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function __destruct() {
            echo "name : ".$this->name;
        }
    }

    $person1 = new Person("taemin");
?>