<?php
    class Rectangle {
        public $width;
        public $height;

        public function getLength() {
            return ($this->width*2 + $this->height*2);
        }

        public function getArea() {
            return ($this->width * $this->height);
        }
    }

    $rect1 = new Rectangle();

    $rect1->width = 20;
    $rect1->height = 10;

    echo "inside : ".$rect1->width."<br>";
    echo "height : ".$rect1->height."<br>";
    echo "box aroune : ".$rect1->getLength()."<br>";
    echo "box inside : ".$rect1->getArea();
?>