<?php

class Person{

    //properties
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 18;

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

    public function getName(){
        //how to refrence a property
        return $this->name;
    }

    public function getDA(){
        //how to refrence a  static property in a method
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
}


?>