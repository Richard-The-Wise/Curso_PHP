<?php
function imprimirNombre($nombre, $apellido = null){
    echo $nombre . " " . $apellido . "<br>";

}


imprimirNombre("Ricardo", "Hernández");
imprimirNombre("Oscar", "Lopez");
echo rand(1, getrandmax()) /getrandmax();
// var_dump (random_int(1,14500));

$nombre = "Rick";
echo strtoupper($nombre);
?>