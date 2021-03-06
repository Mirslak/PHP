<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit;
}else{
    include('dbconection.php');
    $ultimo_login = null;           //Limpiamos la variable para que no haya problemas
    echo"Comprobando Base de datos <br>";
    /*
    $sqlpaises="SELECT * FROM paises";
    $stmt = $conn->prepare($sqlpaises);
    $stmt->execute();
    $ncount= $stmt->rowCount();
    echo $ncount;*/

    $sql = "SELECT password FROM agenda WHERE username = :user";
    $stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $stmt->execute(array(':user'=> $_SERVER['PHP_AUTH_USER']));
    $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

  
    if(password_verify($_SERVER['PHP_AUTH_PW'], $usuario[0]["password"])){
       
        if (isset($_COOKIE['ultimo_login'])) {
            $ultimo_login = $_COOKIE['ultimo_login'];
            }
            //Recoge la ultima visita
             setcookie("ultimo_login", time(), time()+3600);
                
    }else{
        header('WWW-Authenticate: Basic realm="Contenido restringido"');
        header("HTTP/1.0 401 Unauthorized");
       exit;
       
    }
    
    if (isset($ultimo_login)) {
        echo "Nombre de usuario: ".$_SERVER['PHP_AUTH_USER']."<br />";
        echo "Hash de la contraseña: ".md5($_SERVER['PHP_AUTH_PW'])."<br />";
        if (isset($ultimo_login)){
            echo "Ultimo login: " . date("d/m/y \a \l\a\s H:i", $ultimo_login);
        }else
            echo "Bienvenido. Esta es su primera visita.";
        }
    $conn = null;
}
?>


    
