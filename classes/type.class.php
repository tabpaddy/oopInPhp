<?php

    class Type{
        //properties
        public $name;
        public $eyeColor;
        public $age;

        /*methods
        by using type declaration, we can throw an error if wrong type is given workd with
            -class/interface names
            -self (used to refrence at same class)
            -array
            -callable
            -boolean
            -float
            -int
            -string
            -iterable
            -object
            */
        public function setName(string $newName){
            $this->name = $newName;
        }

        public function getName(){
            return $this->name;
        }
    }

?>