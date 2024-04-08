<?php
declare(strict_types = 1);

use function PHPSTORM_META\type;

 include "includes/autoloader.php";
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
    $type = new type();

    try{
        $type->setName("praise");
        echo $type->getName();
    }catch (TypeError $e) {
        echo "Error: " . $e->getMessage();
    }
?>

  </body>
</html>