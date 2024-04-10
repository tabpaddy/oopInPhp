<?php

    class UsersView extends Users{
        public function showuser($name){
            $result = $this->getUser($name);
            echo "Full name: ". $result[0]['firstname'] . " " .$result[0]['lastname']."<br>";
            echo "Date of  birth: " . $result[0]['dob'];
                }
    }

?>