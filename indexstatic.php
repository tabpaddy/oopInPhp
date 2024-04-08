<?php
 include "includes/static.php";
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
    //how to reference static
//    echo Person::$drinkingAge;
//    Person::setDrinkingAge(20);
//    echo Person::$drinkingAge;

$person1 = new Person("praise", "brown", 21);
echo $person1 -> getDA();
?>

  </body>
</html>