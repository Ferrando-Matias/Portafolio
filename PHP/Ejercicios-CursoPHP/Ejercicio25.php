<?php
//HERENCIA

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

class trabajador extends persona
{   //heredamos las propiedades y metodos de la clase persona
    public $puesto; //propiedad nueva
    public function presentarComoTrabajador()
    {
        echo "Hola, soy " . $this->nombre . " y soy un " . $this->puesto . "<br>";
    }
}

$objetoTrabajador = new trabajador();  //instancia o creacion de un objeto
$objetoTrabajador->asignarPersona("matias");    //llamando un metodo
$objetoTrabajador->puesto = "profesor";
echo $objetoTrabajador->presentarComoTrabajador(); //imprimir una propiedad