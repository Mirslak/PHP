<!DOCTYPE html>
<html>
<head>
<title>Titutlo de la aplicación</title>
</head>
<body>
<?php $nombre="Africa" ?>
<img src="images/foto.jpg" width="50%">
<p>La fecha actual es: <br>
<?php 
	$DateAndTime = date('d-m-Y h:i:s a', time());
	echo "$DateAndTime.";
	echo "<br>";
	echo "Mi nombre es: $nombre";
	?>	

</p>
</body>
</html>
