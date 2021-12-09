<?php
   
    $uploadFile = $_FILES['foto']['name'];
    $tipo = $_FILES['foto']['type'];
    $tamano = $_FILES['foto']['size'];
    $temp = $_FILES['foto']['tmp_name'];
     
    move_uploaded_file($temp, 'images/'.$uploadFile);
    echo'<p><img src="images/'.$uploadFile.'"></p>';
       
?>