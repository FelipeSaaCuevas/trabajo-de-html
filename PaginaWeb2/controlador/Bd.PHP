<?php

$LINK = mysqli_connect("localhost", "usuario", "dYT!amH*(@vSd8An", "usuario");

if ($LINK === false) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuarios_registrados (nombre, apellido, rol, contraseña,numero_articulo) 
        VALUES ('Felipe', 'Saa', 1, 'casper',1)";

if (mysqli_query($LINK, $sql)) {
    echo "Registrado correctamente";
} else {
    echo "Ha ocurrido un error: " . mysqli_error($LINK);
}
$sql = "INSERT INTO articulo (numero_articulo, nombre, articulo) 
        VALUES (1,'Felipe',$articulo)";