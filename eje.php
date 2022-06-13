<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="eje.php" method="POST">
    <p> ingrese su estrato </p>
    <input type="number" name="n" > 
    <button type="submit"> Enviar</button>
    </form>
    <?php 
$valor=$_POST['n'];
echo $valor;
if ($valor>0){

    echo "Su numero es positivo";

}
elseif($valor==0) {
    echo "Su numero es 0";
}
else{
    echo "Su numero es negativo";
}
?>

</body>
</html>