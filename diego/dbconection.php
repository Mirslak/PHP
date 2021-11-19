<?php
$servername = "localhost";
$dbname = "prueba";
$username = "app";
$password = "543210";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida con éxito";
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>