<?php

class Person{

    //properties
    public $name;
    public $eyeColor;
    public $age;

    //constructors
    public function __construct($name, $eyeColor, $age) 
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //methods
    public function setName($name) {
        $this->name = $name;
    }

    //destructors
    // public function __destruct()
    // {
    //    //what we use destruct for
    //    //1 to clean up our class
    // //    close a database
    // }


}


?>