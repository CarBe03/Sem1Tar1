<?php

//Integeer
$a=2;
//Float
$b=2.12;
//String
$c="Carlos";
//Boolean
$d=false;
//Array
$e=array("amarillo", "azul", "rojo");

//Imprimir los valores para comporbar si esta bien 

echo "Integer:".$a."<br>";

echo "Float:".$b."<br>";

echo "String:".$c."<br>";
    
echo "Boolean:".($d ? 'true':'false')."<br>";
    
echo "Array:".implode(", ", $e)."<br>";

?>