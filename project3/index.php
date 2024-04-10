<?php
include 'includes/class-autoload.inc.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATABASE CONNECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  </head>
  <body>
        <?php
         // getuser with prepare
        // $testObj = new Test();
        // $testObj->getUsers();

        // getuser with prepare
        // $testObj = new Test();
        // $testObj->getUsersStmt("praise", "tush");

        //insert user into database
        // $testObj = new Test();
        // $testObj->insertUsersStmt("goody", "tush", "2002-07-15");

        // MVC method
        //getuser
        $usersObj = new UsersView();
        $usersObj->showuser("Goody");


        // setuser
        $usersObj2 = new UsersContr();
        $usersObj2->createuser("tammy", "samuel", "1999-11-20");




?>
  </body>
</html>