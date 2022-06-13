<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="eje2.php" method="POST">
    <p> ingrese el estrato</p>
    <input type="number" name="numero"> 
    
    <p> ingrese el rango de minutos</p>
    <input type="number" name="rango"><br> 
    <br>
    <button type="submit"> Enviar</button>
    </form>
    <br>
    <?php 
$valor=$_POST['numero'];

$rango=$_POST['rango'];

if ($valor==1 and $rango>0 and $rango<=500){

    echo "Basico-35.000";
}
elseif($valor==1 and $rango>=500){
    echo "promocional-90.000";
}
if($valor==2 and $rango>0 and $rango<=500){
    echo "basicoE2-50.000";
}
elseif($valor==2 and $rango>=500){
    echo "PromocionalE2-115000";
}
if($valor==3 and  $rango>0 and $rango<=500)
    echo "BasicoE3-65.000";
elseif($valor==3 and $rango>=500){
    echo "PromocionalE3-140000";
}
if($valor==4){
    echo "Consumo limitado-170.000";  
}
?>

</body>
</html>