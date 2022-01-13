<?php 
 class Persona { 
    
    //Acá dentro va el código 
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad)
    {
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
    }

    public function __destruct()
    {
       echo 'objeto destruido';
    }
    public function saludar(){
       return 'Hola, soy ' . $this->nombre . ' ' . $this->apellido . ' y tengo ' . $this->edad . ' años. <br>';
    }
 }
?>

<!--https://fernando-gaitan.com.ar/php-orientado-a-objetos-parte-1-clases-propiedades-y-metodos/-->