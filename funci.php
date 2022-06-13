<?php
//Funcion sin parametros
/*
function saludar(){
    echo"Hola ADSI 2324924";
}
saludar();
*/
//funcion con paramentros
/*
function saludarficha($numeroficha)
{
   echo" HOLA ADSI ".$numeroficha;
}
saludarficha(2324924);
echo "<br>";
$ficha = 222222;
saludarficha($ficha);
*/
//optional

function saludarfichaOpcional($numeroficha=2324924)
{
   echo" HOLA ADSI ".$numeroficha;
}
saludarfichaOpcional(5555555);
saludarfichaOpcional();