
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dia</title>
</head>
<body>
    <form action="match.php" method="POST">
        <p>Ingrese numero de dia</p>
        <input type="text" name="ndia" > 
        <button type="submit"> Enviar</button>
        </form>
<?php
 $ndia=$_POST['ndia'];
 echo match($ndia){
     "1"=>"Lunes",
     "2"=>"Martes",
     "3"=>"Miercoles",
     "4"=>"Jueves",
     "5"=>"viernes",
     "6"=>"Sabado",
     "7"=>"Domingo",
     default=>"fuera de rango",
 };
?>
</body>
</html>