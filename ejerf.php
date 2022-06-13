<?php
function Parametros($n1=4 , $n2=6)
{
    $suma=$n1+$n2;
    echo "el resultado de la suma es = ".$suma;
} 
Parametros();
//Suma de funcion sin parametros

function sumar()
{
    $numero1 = 400;
    $numero2 = 1000;
    $suma = $numero1 +$numero2;
    echo"la suma $numero1 y $numero2 es: " . $suma;
    
} 
sumar();