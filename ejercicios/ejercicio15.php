<?php
$vehiculos = array ('carros','motos','trocas','hibridos');

echo $vehiculos[1];

$alimentos = array("hamburgesas","lonches","pizzas");
for ($i=0; $i < count($alimentos) ; $i++) { 
    echo $alimentos[$i]. "<br>";
}

array_push($alimentos,"lasaña","hambre");
echo "<br>";

for ($i=0; $i < count($alimentos) ; $i++) { 
    echo $alimentos[$i]. "<br>";
}

// foreach ($alimentos as $key => $value) {
//     echo $key;
// }
?>