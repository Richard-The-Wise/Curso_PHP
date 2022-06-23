<?php
class persona{

    public $nombre; //Propiedades
    private $edad; // Solo puede ser usado dentro de los métodos de la clase que lo definió.
    protected  $altura; // Solo se puede acceder desde la misma clase y las clases heredadas.

    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
        imprimirNombre();
    }

    public function imprimirNombre(){
        echo "Hola soy " . $this->nombre;

    }

    public function getEdad(){
        $this->edad = 25;
        echo $this->edad;
    }

}

class trabajador extends persona {
    public $puesto;

    function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

}

$objAlumno = new persona("Richardo"); //Instancia de clase o creación de objeto
$objAlumno2 = new persona();

$objAlumno->asignarNombre("Ricardo"); //Llamando un método

// echo $objAlumno->nombre; //Imprimir una propiedad

$objAlumno2->asignarNombre("Fernando");
$objAlumno2->imprimirNombre();

// echo $objAlumno->nombre; //Imprimir una propiedad

$arrayPrueba = array("esto","es","prueba");
print_r($arrayPrueba);

$objAlumno2->getEdad();

?>