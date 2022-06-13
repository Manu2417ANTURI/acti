<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<form action="repaso.php" method="POST">
        <p>Ingrese el primer numero</p>
        <input type="number" name="n1" >
        <p>Ingrese el segundo numero</p>
        <input type="number" name="n2" >
        <br>
        <p>Para suma (1)</p>
        <p>Para resta(2)</p>
        <p>Para multi(3)</p>
        <p>Para divis(4)</p>
        
        <p>Digite la opcion</p>
        <input type="text" name="opc" >
        <button type="submit"> Enviar</button>
        <br> 
        </form>
<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$opc=$_POST["opc"];
$suma=$n1+$n2;
$resta=$n1-$n2;
$multi=$n1*$n2;
$divis=$n1/$n2;
switch($opc){
    case '1':
    echo $suma;
    break;
    case '2':
    echo $resta;
    break;
    case '3':
    echo $multi;
    break;
    case '4':
    echo $divis;
    break;
    default:
    echo "ha superado el rango";
    break;
}
 ?>


</body>
</html>
