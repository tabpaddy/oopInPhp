<?php

    class Users extends Dbh{

        protected function getUser($name){
            $sql = "SELECT * FROM users WHERE firstname = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            $result = $stmt->fetchAll();
            return $result;


        }

        protected function setUser($firstname, $lastname, $dob){
            $sql = "INSERT INTO users(firstname, lastname, dob) VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $dob]);

            


        }

    }


?>