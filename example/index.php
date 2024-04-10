<?php

    //regular class

    include_once "classes/sample.class.php";

    $obj = new Sample();
    $obj->helloWorld();

    //anonymous class

    $newObj = new class(){
        public function helloworld(){
            echo "hello world";
        }
    };

    $newObj->helloworld();

?>