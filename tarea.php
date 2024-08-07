<?php

//Integeer
$a=2;
$a1=9;
$sum=$a1+$a;
$mul=$a*$a1;
//Float
$b=2.12;
//String
$c="Carlos";
//Boolean
$d=false;
// Estructura de control condicional
if ($d) {
    echo "La variable es verdadera.\n";
} else {
    echo "La variable es falsa.\n";
}
//Array
$e=array("amarillo", "azul", "rojo");

// Crear una variable de tipo cadena
$ca1 = "Bienvenido, ";
$ca2 = "Carlos!";

// Concatenación de dos cadenas
$cadenaconcatenada = $ca1 . $ca2;

// Obtener la longitud de la cadena concatenada
$longitud = strlen($cadenaconcatenada);

// Mostrar resultados

echo "Cadena concatenada: " . $cadenaconcatenada . "\n";

echo "Longitud de la cadena concatenada: " . $longitud . "\n";

echo "Integer:".$a."<br>";

echo "Suma:".$sum."<br>";

echo "Multiplicación:".$mul."<br>";

echo "Float:".$b."<br>";

echo "String:".$c."<br>";
    
echo "Boolean:".($d ? 'true':'false')."<br>";
    
echo "Array:".implode(", ", $e)."<br>";

?>