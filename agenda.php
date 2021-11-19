<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda de contactos</h1>

    <form method = "post">
    <label for="nombre">Nombre:</label><Input type="text" name="nombre" required> <br>
    <label for="numero">Numero:</label><Input type="text" name = "numero"> <br>
    <input type="submit" name="submit" value="Enviar" class = "form-control">

    <button type="button" class="btn btn-warning">Iniciar Sesión</button>
    
</form>

<?php
    session_id("Africa");
    session_start();
    error_reporting(0);
    print "<br>";


    if($_SESSION[$_POST["nombre"]] != $_POST["numero"]){
        $_SESSION[$_POST["nombre"]] = $_POST["numero"];
    }
    if($_SESSION[$_POST["nombre"]]== ""){
        unset($_SESSION[$_POST["nombre"]]);
        unset($_SESSION[$_POST["nombre"]]);
    }

    foreach ($_SESSION as $nombre => $numero){
        print"nombre: $nombre <br> numero: $numero <br>";
    }
?>
</body>
</html>