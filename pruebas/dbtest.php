<?php
$pdo = false;
$servername = "localhost";
$username = "app2";
$password = "543210";
$dbname = "prueba";

$create_sql = "CREATE TABLE invitados(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )" ;

if(!$pdo){
    //Crear conexión
    $conn = new mysqli($servername, $username, $password,$dbname);

    //Comprobar conexión
    if($conn->connect_error) {
        die("Conexión fallida (MYSQLi): " . $conn->connect_error);
    }

    echo "Exito en la conexión (MYSQLi)";

    if($conn->query($create_sql)=== TRUE){
        echo "Tabla invitados creada con éxito.";
    }else{
        echo"Error al crear la tabla: " . $conn->error;
    }
}else{
    try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Exito en la conexión (PDO)";
    }catch(PDOException $e){
        echo "Conexión fallida (PDO): " . $e->getMessage();
    }
}

if(!$pdo){
    $conn->close();
}else{
    $conn = null;
}

?>