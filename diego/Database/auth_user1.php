<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
 header('WWW-Authenticate: Basic Realm="Contenido restringido"');
 header('HTTP/1.0 401 Unauthorized');
echo "Usuario no reconocido!";
exit;
}else{
    include('dbconection.php');
    echo"Comprobando Base de datos ";
    /*
    $sqlpaises="SELECT * FROM paises";
    $stmt = $conn->prepare($sqlpaises);
    $stmt->execute();
    $ncount= $stmt->rowCount();
    echo $ncount;*/

    $sql = "SELECT password FROM agenda
    WHERE username = :user";
    $stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(':user'=> $_SERVER['PHP_AUTH_USER']));
    $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(password_verify($_SERVER['PHP_AUTH_USER'], $usuario[0]["password"])){
        print "<br>Acceso autorizado";
    }else{
        print "<br>Acceso denegado";
    }
    

}
?>
