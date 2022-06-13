
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contraseña</title>
</head>
<body>
    <form action="ejercicio.php" method="POST"></form>
    <p>CONTRASEÑA
    <input type= "text" name="contraseña">
    <br>
    <button type="submit"> Enviar</button>
    <br>
    <?php
    $contra=$_POST["contraseña"];
    $count=0;
  
    while ($count<=3) {
        echo"Error de contraseña";
    }
?>
</form>
</body>
</html>