<?php
    include('dbconection.php');
    
    $listaUsuario="SELECT * FROM agenda";
            $stmt = $conn->prepare($listaUsuario);
            $stmt->execute();
            $listaUsuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <style>
        th,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <!--Tabla de usuario-->

    <table border="1">
        <tr>
            <th>Id Usuario</th>
            <th>Nombre</th>
            <th>apellido</th>
            <th>telefono</th>
            <th>username</th>
            <th>nacionalidad</th>
            <th>Sexo</th>
            <th>Fecha de modificación</th>
            <th>Edición</th>
        </tr>
    <?php
        foreach($listaUsuario as $usuario){

            echo "<tr>";
                foreach($usuario as $column=> $data){

                    if ($column <> "password") {
                        
                        echo"<td>$data</td>";
                    }
                    /*<td>1</td>
                    <td>Africa</td>
                    <td>Olmedilla</td>
                    <td>618536254</td>
                    <td>Mirslak</td>
                    <td>Española</td>
                    <td>M</td>
                    <td>17/02/2021</td>
                    <td><a href=\"#\">Ver</a> <a href=\"#\">Editar</a> <a href=\"#\">Borrar</a></td>*/
                }
                ?>
                    <td><a href="?id=<?=$usuario["id"]?>">Ver</a> <a href="?id=<?=$usuario["id"]?>">Editar</a> <a href="?id=<?=$usuario["id"]?>">Borrar</a></td>
                <?php
                echo "</tr>";
        }
    ?>
    </table>
</body>
</html>