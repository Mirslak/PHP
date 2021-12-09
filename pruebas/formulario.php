<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<h2>Formulario:</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<label for="Nombre" class="form-label">Nombre:</label>
    <input type="text" name="nombre" maxlength="50" class = "form-control"><br>
    <label for="Contraseña" class="form-label">Contraseña:</label>
    <input type="password" name="password" class = "form-control"><br>
    <label for="Educacion" class="form-label">Educacion:</label>

    <select name="educacion">
        <option value="sin-estudios">Sin estudios</option>
        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
        <option value="formacion-profesional">Formación profesional</option>
        <option value="universidad">Universidad</option>
    </select> <br>

    <label for="Nacionalidad" class="form-label">Nacionalidad:</label>
    <input type="radio" name="nacionalidad" value="hispana" class = "form-check-input">Hispana</input>
    <input type="radio" name="nacionalidad" value="otra" class = "form-check-input">Otra</input><br>

    <label for="Idiomas">Idiomas:</label>
    <input type="checkbox" name="idiomas[]" value="español" checked="checked" class = "form-check-input">Español</input>
    <input type="checkbox" name="idiomas[]" value="inglés" class = "form-check-input">Inglés</input>
    <input type="checkbox" name="idiomas[]" value="francés" class = "form-check-input">Francés</input>
    <input type="checkbox" name="idiomas[]" value="aleman" class = "form-check-input">Alemán</input><br>
    <label for="Email" class="form-label">Email:</label>
    <input type="text" name="email" class = "form-control"><br>
    <label for="Sitio Web" class="form-label">Sitio Web:</label>
    <input type="text" name="sitioweb" class = "form-control"><br>


    // Botón de enviar
    <input type="submit" name="submit" value="Enviar" class = "form-control">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</form>
    
</body>
</html>