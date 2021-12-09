<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>África Olmedilla Soler</title>
</head>
<body>
    <?php
        date_default_timezone_set('Europe/Madrid');
        $mes = date("m");
        $dia = date("N");
        switch($mes){
            case 1: 
                $numM="Enero";
                break;
            case 2: 
                $numM="Febrero";
                break;
            case 3: 
                $numM="Marzo";
                break;
            case 4: 
                $numM="Abril";
                break;
            case 5: 
                $numM="Mayo";
                break;
            case 6: 
                $numM="Junio";
                break;
            case 7: 
                $numM="Julio";
                break;
            case 8: 
                $numM="Agosto";
                break;
            case 9: 
                $numM="Septiembre";
                break;
            case 10: 
                $numM="Octubre";
                break;
            case 11: 
                $numM="Noviembre";
                break;
            case 12: 
                $numM="Diciembre";
                break;

        }

        switch($dia){
            case 1:
                $diaS = "Lunes";
            case 2:
                $diaS = "Martes";
            case 3:
                $diaS = "Miercoles";
            case 4:
                $diaS = "Jueves";
            case 5:
                $diaS = "Viernes";
            case 6:
                $diaS = "Sábado";
            case 7:
                $diaS = "Domingo";
        }

        print $diaS.", ".date("j")." de ".$numM." de ".date("Y");
    ?>
</body>
</html>