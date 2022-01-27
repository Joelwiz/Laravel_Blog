<?php

$datos = [1, 3, 4, 5];

$datos2 = array (5, 7, 8,7);

$a = array ("portero" => "Eva" , "Defensa" => "Ana" );

/*
echo $datos[1];

echo $a["portero"];
*/

// Recorrer un array.
foreach ( $a as $dato ) {
    echo $dato;
}

for ($i=0; $i < count($datos); $i++ ) {
    echo $datos[$i];
}

$datos = [
         [1, 3, 4],
         [16, 37, 48]
        ];



for ($i=0; $i < 2; $i++ ) {
    echo "<br>";
    for ($j=0; $j < 3; $j++ ) {
        echo $datos[$i][$j].", ";
    }
}


