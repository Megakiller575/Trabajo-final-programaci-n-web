<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "" method= "post">
    
    <label for= "correo"> Ingrese su correo </label>
    <input type= "pasword" id= "contrasena" name= "nombre">
    <button id= "sesion">cerrar sesion</button>
    <?php

    $tiempo_de_vida = 300; // 300 segundos = 5 minutos

    // Establecer el tiempo de recoleccion de basura
    ini_set("session.gc_maxlifetime", $tiempo_de_vida);

    // Iniciar sesión
    session_start();

    if ("sesion"){
        echo "si funsiona"
    }
    ?>
    
</body>
</html>

session_destroy();

echo "Nombre: " . $_SESSION["nombre"] . "<br>";
echo "Apellido: " . $_SESSION["apellido"] . "<br>";