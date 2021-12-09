<?php

   /*  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
        $fileName = $_FILES['uploadedFile']['name'];
        $fileSize = $_FILES['uploadedFile']['size'];
        $fileType = $_FILES['uploadedFile']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
    }*/

    if(isset($_POST['uploadBtn'])){
        $uploadFile = $_FILES['uploadFile']['name'];

        if(isset($uploadFile) && $uploadFile != ""){

            $tipo = $_FILES['uploadFile']['type'];
            $tamano = $_FILES['uploadFile']['size'];
            $temp = $_FILES['uploadFile']['tmp_name'];

            if(!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))){
                echo '<div>Error. La extension o el tamaño no es correcto</div>';
            }else{
                if(move_uploaded_file($temp, 'images/'.$uploadFile)){
                    echo'<div>La imagen se ha subido correctamente</div>';

                    echo'<p><img src="images/'.$uploadFile.'"></p>';
                }else{
                    echo'<div>Ocurrio algún error al subir el fichero. No pudo guardarse.</div>';
                }
            }
        }
    }
?>