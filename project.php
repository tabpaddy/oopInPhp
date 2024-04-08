<?php
declare(strict_types = 1);


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

  <form action="includes/calc.inc.php" method="post">
    <p>My Own calculator!</p>
    <input type="number" name="num1" placeholder="First number">
    <select name="opor">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="Div">Division</option>
        <option value="mul">multiplication</option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">calculator</button>

  </form>

  </body>
</html>