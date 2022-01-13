<?php
    require_once 'clases/producto.php';
    $producto = new producto(111, 'Pendrive 8', 'Pendrive marca Kingston de 8GB', 150);
    echo 'Id: ' . $producto->get_id() . '<br>';
    echo 'Nombre: ' . $producto->get_nombre() . '<br>';
    echo 'Descripcion: ' . $producto->get_descripcion() . '<br>';
    echo 'Precio: $arg' . $producto->get_precio() . '<br>';

?>