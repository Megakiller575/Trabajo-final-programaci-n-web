<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de registro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <form action = "nombre donde se enviara" method="post">

    <label for="nombre">Ingresar Nombre: </label> <br>
    <input type="text" id="nombre" name="nombre" value="">

    <br>
    <br>

    <label for="apellido">Ingresar Apellido</label> <br>
    <input type="text" id="apellido" name="apellido">
    <br>
    <br>

    <label for="gmail">Ingresar Correo Electronico</label><br>
    <input type="email" id="gmail" name="gmail">

    <br>
    <br>

    <label for="contrasena">Ingresar Contraseña</label>  <br>
    <input type="password" id="contrasena" name="contrasena">

    <br>
    <br>

    <label for="confirmar_contrasena">confirmar contrasena</label> <br>
    <input type="password" id="confirmar_contrasena" name="confirmar_contrasenas">


    <br>
    <br>

    <input type="submit" value="Enviar">
    </form>
    <?php
    
    ?>

</body>
</html>