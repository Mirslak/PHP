<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border = "1">
    <tr>
        <th>Clave</th>
        <th>Contenido</th>
    </tr>

    <?php

reset($_SERVER);
while($content = current($_SERVER)){
    echo"<tr>";
    echo"<td>".key($_SERVER)."</td>";
    echo"<td>".current($_SERVER)."</td>";
    echo"</tr>";
    next($_SERVER);
};



    ?>

    </table>
    
</body>
</html>