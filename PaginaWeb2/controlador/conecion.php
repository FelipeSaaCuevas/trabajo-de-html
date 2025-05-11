<?php
    require_once 'configuracion.php';
    $host = BHOST;
    $usuario = BDUSER;
    $contrasena = BDCON;
    $baseDeDatos = BDNAME;
    $conexion;
   try {
    $conn = new PDO("mysql;host=$host;baseDeDatos=$baseDeDatos",$usuario,$$contrasena);
   
    echo "conecion ok";
    $data = $conn->query("SELECT nombre, apellido, rol, numero_articulo from usuarios_registrados");
    
    foreach($data as $row){
        echo $row['nombre']."<br>";
        echo $row['apellido']."<br>";
        echo $row['rol']."<br>";
        echo $row['numero_articulo']."<br>";
    }
   }
   catch(PDOException $E){
    echo "error de conecion".$E->getMessage();
   }
?>