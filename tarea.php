<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <!--crear un formulario de registro que incluya 
    - Nombre
    - Apellido
    - Correo Electrónico (Validar que es un correo electrónico)
    - Contraseña (Validar que tenga al menos 8 caracteres, una mayúscula, una minúscula y un número)
    - Confirmar Contraseña (Validar que las contraseñas sean iguales)
    - (Puede agregar otro si lo estima conveniente) 

    link bootsrap:         .https://getbootstrap.com/docs/5.3/forms/form-control/
    -->
    <?php

    ?>
    
    <h1>Formulario</h1>
    <form name="formulario" action="registro.php">
    Nombre: <input type="text" name="nombre" required><p>
    Apellido: <input type="text" name="apellido" required><p>
    Correo Electrónico: <input type="text" name="correo electronico" required><p>
    contaseña <input type="password" name="contraseña" required><p>
    confirmar contraseña: <input type="password" name="confirmar contraseña" required><p>
    

    </form>


    
</body>
</html>