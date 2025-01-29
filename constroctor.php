<?php

class MyCar{
    public $color;

    public function __construct($newColor)
    {
        $this->color = $newColor;
    }

    public function drive(){
        echo "I am driving {$this->color} car.\n";
    }
}

$obj1 = new MyCar("orange");

$obj1->drive();



?>