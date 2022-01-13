<?php
    require_once 'clases/personapriv.php';

    //creo el objeto
    $persona = new persona('Africa', 'Olmedilla', '24');

    //Cambio el nombre
    $persona->nombre = 'Miss Fortune';

    //Muestro el resultado de las propiedades
    echo $persona->saludar();

    //Destruyo el objeto
    //unset($persona);
?>