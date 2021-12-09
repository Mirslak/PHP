<?php
    include('dbconection.php');
   //$id=$_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo CRUD Sencillo - Tabla USUARIO</title>
</head>
<body>


    <?php
        $sql = "SELECT * FROM agenda WHERE id = :identificador";
        $stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $stmt->execute(array('identificador' => 13));
        $user_view = $stmt->fetchAll();

        $sqlpaises="SELECT * FROM paises";
        $stmt = $conn->prepare($sqlpaises);
        $stmt->execute();
        $lista_paises = $stmt->fetchAll();

    ?>

    <?php
        
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre" value=""> <br>
    <label for="apellido">Apellido:</label><input type="text" name="apellido" value=""><br>
    <label for="telefono">Telefono</label><input type="text" name="telefono" value=""><br>
    <label for="usuario">Usuario:</label><input type="email" name="usuario" value=""><br>
    <label for="contrasena">Contraseña:</label><input type="text" name="contrasena" value=""><br>
    <label for="nacionalidad">Nacionalidad: </label>
    <select name="nacionalidad">

    <?php
        foreach ($lista_paises as $paises){
            print "<option value=\"$paises[1]\">$paises[2]</option>";
        }
    ?>
    </select><br>
    <label for="sexo">Sexo: </label>
    <input type="radio" name="sexo" value="m">Mujer</input>
    <input type="radio" name="sexo" value="h">Hombre</input><br>
    <div>
        <label for="imagen"> Subir un archivo: </label><br>
        <input type="file" id="foto" name="foto"> <br>
   </div>
    <input type="submit" name="submit" value="Crear Nuevo usuario">
    </form>

    <?php 
    function filtrado($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"]=="POST") {
        $nombre = filtrado($_POST["nombre"]);
        $apellido = filtrado($_POST["apellido"]);
        $telefono = filtrado($_POST["telefono"]);
        $usuario = filtrado($_POST["usuario"]);
        $contrasena = filtrado($_POST["contrasena"]);
        $hash = password_hash($contrasena, PASSWORD_DEFAULT);
        $nacionalidad = filtrado($_POST["nacionalidad"]);
        $sexo = filtrado($_POST["sexo"]);
        $foto = filtrado($_POST["foto"]);

        $data = [
            'nombre'=> $nombre,
            'apellido'=> $apellido,
            'telefono'=> $telefono,
            'usuario'=> $usuario,
            'contrasena'=> $hash,
            'nacionalidad'=> $nacionalidad,
            'sexo'=> $sexo,
            'foto'=> $foto
        ];
        
        /*$sql = "INSERT INTO agenda (nombre, apellido, telefono, username, password, nacionalidad, sexo)
        VALUES ('$nombre', '$apellido', '$telefono', '$usuario', '$hash', '$nacionalidad', '$sexo')";*/

        $sql = "INSERT INTO agenda (nombre, apellido, telefono, username, password, nacionalidad, sexo, foto)
        VALUES (:nombre, :apellido, :telefono, :usuario, :contrasena, :nacionalidad, :sexo, :foto)";
        /*$sql = "SELECT password FROM agenda WHERE id =:identificador";*/
        $stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $stmt->execute($data);
        $ultimo_id = $conn->lastInsertId();
        
        /*$conn->exec($sql);*/

        $conn = null;

    }

    if (isset($ultimo_id)) {
    ?>
    
    <h2>Mostrar datos enviados</h2>
    <img src="images/<?php $user_view[0]['foto']?>">
    <p>ID: <?php print $ultimo_id ?></p>
    <p>Nombre: <?php isset($nombre) ? print $nombre : ""; ?></p>
    <p>Apellidos: <?php isset($apellido) ? print $apellido : ""; ?></p>
    <p>Teléfono: <?php isset($telefono) ? print $telefono : ""; ?></p>
    <p>Usuario: <?php isset($usuario) ? print $usuario : ""; ?></p>
    <p>Contraseña: <?php isset($contrasena) ? print $contrasena : ""; ?></p>
    <p>nacionalidad
: <?php isset($nacionalidad) ? print $nacionalidad : "Sin contraseña"; ?></p>
    <p>Sexo: <?php isset($sexo) ? print $sexo : ""; ?></p>
    

    <?php }
    else {
       // print "Se ha producido un error. Creación de nuevo usuario abortada";
    }
    ?>
</body>
</html>