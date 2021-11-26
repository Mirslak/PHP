<?php
    include('dbconection.php');
    $id = $_GET["id"];

    $sql = "SELECT * FROM agenda WHERE id = :identificador";
        $stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $stmt->execute(array('identificador'=>$id));
        $user_view = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Africa olmedilla Soler</title>
</head>
<body>
   

    <h2>Mostrar datos del usuario</h2>
    <p>ID: <?php print $id ?></p>
    <p>Nombre: <?php print $user_view[0]["nombre"] ?></p>
    <p>Apellidos: <?php print $user_view[0]["apellido"] ?></p>
    <p>Teléfono: <?php print $user_view[0]["telefono"] ?></p>
    <p>Usuario: <?php print $user_view[0]["username"] ?></p>
    <p>nacionalidad: <?php print $user_view[0]["nacionalidad"] ?></p>
    <p>Sexo: <?php print $user_view[0]["sexo"] ?></p>


    <?php 
        $sql = " DELETE FROM agenda 
        WHERE id = $id";
        
        $stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $stmt->execute();
        $ultimo_id = $conn->lastInsertId();
      
        $conn = null;

   

        print "El usuario se ha borrado correctamente.";

    
    ?>
</body>
</html>