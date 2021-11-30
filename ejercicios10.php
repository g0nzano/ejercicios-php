<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //verdad o falso
    // if ( ($valorA != $valorB) || ($valorA > $valorB) )
    if ( ($valorA != $valorB) && ($valorA > $valorB) ){

        echo"el valor de A es diferente al de B y tambien es mayor";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relaciones Relacional II</title>
</head>
<body>
    <form action="ejercicios10.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br/>
        valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>