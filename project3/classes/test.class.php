<?php
//to select user
class Test extends Dbh{

    public function getUsers(){
        $sql = "SELECT * FROM users";//sql statement
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['firstname']. '<br>';
        }
    }

    //using prepare for getting the user
    public function getUsersStmt($firstname, $lastname){
        $sql = "SELECT * FROM users WHERE firstname = ? AND lastname = ?";//sql statement
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['dob']. '<br>';
        }
    }

    //inserting into databse
    public function insertUsersStmt($firstname, $lastname, $dob){
        $sql = "INSERT INTO users(firstname, lastname, dob) VALUES (?,?,?)";//sql statement
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);

    }


}



?>