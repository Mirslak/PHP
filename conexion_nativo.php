<?php

// utilizando llamadas a funciones

$conexion = mysqli_connect('localhost', 'app2', '543210', 'prueba');

print mysqli_get_server_info($conexion);
?>