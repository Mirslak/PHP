<?php

// utilizando constructores y métodos de la programación orientada a objetos

$conexion = new mysqli('localhost', 'app2', '543210', 'prueba');

print $conexion->server_info;
?>