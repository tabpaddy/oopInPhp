<?php
    declare(strict_types = 1);
    include 'autoloader.php';

    $opor = $_POST['opor'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    $calc = new Calc($opor, (int)$num1, (int)$num2);

    try{
        echo $calc-> calculator();
    }catch(TypeError $e){
        echo "Error!: ".  $e->getMessage();
    }

?>









