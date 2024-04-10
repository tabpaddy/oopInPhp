<?php

class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbname = "oopphp16";

    protected function connect() {
        //dsn- data service name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}



?>