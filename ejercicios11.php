<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //suma
    $suma=$valorA+$valorB;
    //resta
    $resta=$valorA-$valorB;
    //division
    $division=$valorA/$valorB;
    //multiplicaion
    $multiplicacion=$valorA*$valorB;
    
    
    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$division;
    echo "<br/>".$multiplicacion;
       
    if($valorA == $valorB){
        echo "el valor de A es igual que el valor de B <br/>";

        if($valorA == 4){
            echo "el valor es 4<br/>";

        }

        if($valorA==5){
            echo"el valor 5<br/>";
        }
    }
    if (($valorA==$valorB) && ($valorA==4)){
        echo"el valor de A es igual a B y es un numero 4";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicios11.php" method="post">
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