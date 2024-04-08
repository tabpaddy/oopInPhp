<?php

use person as GlobalPerson;

    class Person{
        //properties
        //private: you access it only in the class not visible outside the class
        //we can only use protected to access a property in the same class however if any cny class inherit a class property we can also use it in the other class
        protected $first = "daniel";
        private $last = "nielson";
        private $age = 28;


        // public function owner(){
        //     //to refrence we use '$this'
        //     $a = $this->first;
        //     return $a;
        // }

        
    }

    //we can inherit class property from 1 class to another class using extends keyword.

    class Pet extends Person{
        //public can be access outside the class
        public function owner(){
            // to refrence we use '$this'
            $a = $this->first;
            return $a;
        }
    }

?>