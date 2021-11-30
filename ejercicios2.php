<?php
   if($_POST){


//recibir informaciones del formulario HTML(Metodo Post)
     $nombre=$_POST['txtnombre'];

     echo "hola ".$nombre;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form ation="ejercicios2.php" method="post">
        Nombre:
        <input type="text" name="txtnombre" id="">
        <br/>
        <input type="submit" value="Enviar">
</form>
</body>
</html>