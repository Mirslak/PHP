//Testigo
<?php
    print "<p>Comiemzo</p>\n";
    $encontrado = false;
    for($i = 1; $i < 4; $i++) {
        $dado = rand(1, 6);
        print "<p>Tirada de dado: $dado</p>\n";
        if($dado == 5){
            $encontrado = true;
        }
    }    
    if($encontrado){
        print "<p>Ha salido al menos un 5.</p>\n";

    }else{
        print "<p>No ha salido ningún 5.</p>\n";
    }

    print "<p>Final</p>\n";
?>

//Contador
<?php
print "<p>Cominzo</p>\n";
$cuenta = 0;
for($i = 1;$i < 6;$i ++){
    if($i % 2 == 0){
        $cuenta += 1;
    }
}

print "<p>Desde 1 hasta 5 hay $cuenta múltiposde 2.<\p>\n";
print "<p>Final</p>\n";
?>

//Acumulador
<?php
print "<p>Comienzo</p>\n";
$suma = 0;
for ($i = 1; $i < 6; $i++) {
    $suma += $i;
}
print "<p>La suma de los números de 1 a 5 es $suma.</p>\n";
print "<p>Final</p>\n";
?>
