<?php 
 class persona { 
    
    //Acá dentro va el código 
      private $nombre;
      private $apellido;
      private $edad;

      public function __construct($nombre, $apellido, $edad)
    {
       $this->nombre = $nombre;
       $this->apellido = $apellido;
       $this->edad = $edad;
    }

      public function saludar(){
       return 'Hola, soy ' . $this->nombre . ' ' . $this->apellido . ' y tengo ' . $this->edad . ' años. <br>';
    }
 }
?>

