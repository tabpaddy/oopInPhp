<?php
 class House{
    //properties
    //private: you access it only in the class not visible outside the class
    //we can only use protected to access a property in the same class however if any cny class inherit a class property we can also use it in the other class
    protected $address = "johndperoad";
    private $number = 28;


    public function __construct($address, $number) 
    {
        $this->address = $address;
        $this->number = $number;
    }
 

     //methods
     public function getAddress() {
       echo $this->address = "my house address is johnperoad";
        
    }

    
}




?>