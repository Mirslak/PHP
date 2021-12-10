<?php
include('dbconection.php');

$micontrasena = '123$-';
$mihash = password_hash($micontrasena, PASSWORD_DEFAULT);

$sql = "SELECT password FROM agenda WHERE id =:identificador";
$stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));


$stmt->execute(array(':identificador' => 37));

$user_view = $stmt->fetchAll();

echo "<br>".$mihash."<br>"; 
$mibdhash = $user_view[0]["password"];

echo "<br>".$mibdhash."<br>";

if(password_verify($micontrasena,$user_view[0]["password"])){
    print "Acceso autorizado";
}else{
    print "Acceso denegado";
}


?>