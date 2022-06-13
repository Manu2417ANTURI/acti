<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dia</title>
</head>
<body>
    <form action="switchcase.php" method="POST">
        <p>Ingrese numero de dia</p>
        <input type="text" name="ndia" > 
        <button type="submit"> Enviar</button>
        </form>
    
        <?php
        $num=$_POST['ndia'];
        switch($num){
            case '1':
            echo"dia lunes";
            break;
            case '2':
            echo"dia martes" ;
            break;
            case '3':
            echo"dia miercoles";
            break;
            case '4':
            echo"dia jueves";
            break;
            case '5':
            echo"dia viernes";
            break;
            case'6':
            echo"dia sabado";
            break;
            case '7':
            echo"dia domingo";
            break;
            default:
            echo "ha superado el rango";
            break;
        }
         ?>
       </body>
       </html>
