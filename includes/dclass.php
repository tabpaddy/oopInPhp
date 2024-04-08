<?php

class NewClass{

    //properties and method goes here
    public $data = "i am a poverty";

    public function __construct()
    {
        echo "this class has been instantied <br>";
    }

    public function setNewProperty($newdata)
    {
        $this->data = $newdata;
    }

    public function getProperty()
    {
        return $this->data;
    }

    public function __destruct()
    {
        echo "<br> this is the end of the class";
    }


}


?>