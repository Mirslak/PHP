<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $miArray = array("0" =>49,"1"=>24,"3"=>36,"4"=>80,"5"=>31);

    var_dump($miArray);
    $Tarray = sizeof($miArray);
    echo $Tarray;

    $pos_insert = 0;
    
    while($pos_insert <= ($Tarray-2){
        $min_encontrado = false;
        $min_pos =$miArray[$pos_insert];

        for ($i = $pos_insert; $i < sizeof($miArray); $i++){
            if($miArray[$i] < $pos_insert){
                $min_encontrado = true;
            }
        }

        $pos_insert ++;
    }
    ?>

    <!--selecciona el elemento más pequeño de
    todo el array y se intercambia con el primer elemento. Se
    busca el siguiente más pequeño y se intercambia por el
    segundo y así sucesivamente hasta que quede sólo un
    elemento y por lo tanto la lista esté ordenada-->
</body>
</html>