<?php

class Car{
    public $color = "red";

    public function drive(){
        echo "I am driving a {$this->color} car.\n";
    }

}

$car1 = new Car();

echo $car1->color . "\n";
$car1->drive();



?>