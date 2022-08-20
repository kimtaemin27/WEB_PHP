<?php
    class Hello {
        // Property
        public $name = "김태민";

        // Method
        function say_hello() {
            return $this -> name." 님 안녕하세요";
        }
    }

    // message = Object
    $message = new Hello();

    echo $message -> say_hello();
    echo "<br>";

    var_dump($message);
?>