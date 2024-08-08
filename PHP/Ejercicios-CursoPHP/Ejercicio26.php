<?php
//CONSTRUCTORES

//creo una clase
class persona
{
    public $nombre; //propiedad publica 
    private $edad;  //propiedad privada
    protected $altura; //propiedad protegida, es como una privada pero esta tambien puede ser vista desde clases heredadas

    function __construct($nuevoNombre)  //creacion de un constructor, PHP no admite de manera nativa la sobrecarga de constructores
    {
        $this->nombre = $nuevoNombre;
    }

    public function asignarPersona($nuevoNombre)
    {  //acciones o metodos
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre()
    {
        echo "Hola, soy " . $this->nombre . "<br>";
    }
}

$objetoAlumno = new persona("matias");  //instancia o creacion de un objeto pasando un parametro

//$objetoAlumno->asignarPersona("matias");    //llamando un metodo


echo $objetoAlumno->imprimirNombre(); //imprimir una propiedad