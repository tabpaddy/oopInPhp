<?php
include 'includes/autoloader.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP ADVANCE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  </head>
  <body>
    <?php
    //how to refrence property using object
     $person1 = new Person\Person("praise", 28);
     echo $person1->getName();

     echo "<br>";

     $house1 = new House("johndperoad", 12);
     echo $house1->getAddress();


    

?>

  </body>
</html>