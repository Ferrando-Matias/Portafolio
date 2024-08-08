<?php
//CLASES Y OBJETOS

//creo una clase
class persona
{
    public $nombre; //propiedad publica 
    private $edad;  //propiedad privada
    protected $altura; //propiedad protegida, es como una privada pero esta tambien puede ser vista desde clases heredadas

    public function asignarPersona($nuevoNombre)
    {  //acciones o metodos
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre()
    {
        echo "Hola, soy " . $this->nombre . "<br>";
    }
}

$objetoAlumno = new persona();  //instancia o creacion de un objeto

$objetoAlumno->asignarPersona("matias");    //llamando un metodo

$objetoAlumno2 = new persona();
$objetoAlumno2->asignarPersona("pedro");

echo $objetoAlumno->imprimirNombre(); //imprimir una propiedad
echo $objetoAlumno2->imprimirNombre();