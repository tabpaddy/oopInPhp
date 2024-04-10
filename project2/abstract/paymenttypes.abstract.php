<?php
//you can create a object from a abstract class but can only reference it from another class
//we use abstract keyword to create abstract class and method
    abstract class Visa{
        public function visaPayment(){
            return "Perform a payment";
        }

        abstract public function getPayment();
    }

?>