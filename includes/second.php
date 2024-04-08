<?php

    //here is the second clsss example
     class secondClass extends firstClass{
        //properties
        public static $staticProperty = "A static Property!";

        //methods
        public static function anotherTest(){
            echo parent::EXAMPLE;
            echo self::$staticProperty;
        }
     }


     //$b = secondClass::anotherTest();
     //echo $b



?>