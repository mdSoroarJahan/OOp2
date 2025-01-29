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

class MyClass{
    public static $myStaticProperty = "This is a static property\n";

    public static function myStaticFunction(){
        echo "This is a static function and " . self::$myStaticProperty . ".\n";
    }

}

echo MyClass::$myStaticProperty;
MyClass::myStaticFunction();



?>