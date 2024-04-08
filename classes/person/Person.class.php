<?php

namespace Person;

 class Person{
    //properties
    //private: you access it only in the class not visible outside the class
    //we can only use protected to access a property in the same class however if any cny class inherit a class property we can also use it in the other class
    protected $name = "daniel";
    private $age = 28;

    public function __construct($name, $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }
 

     //methods
     public function getName() {
       echo $this->name = "i am daniel";
        
    }

    
}




?>