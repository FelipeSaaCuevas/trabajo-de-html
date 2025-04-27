<?php
require_once __DIR__ . 'http://localhost/PaginaWeb2/modelo/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $contrasena = htmlspecialchars($_POST['contrasena']);
    $rol = $_POST['rol'];

    $usuario = new Usuario($nombre, $apellido, $contrasena, $rol);
    $usuario->guardar();

    $mensaje = "Usuario guardado correctamente.";
    include __DIR__ . 'http://localhost/PaginaWeb2/vista/mensaje.php';
} else {
    $mensaje = "Método no permitido.";
    include __DIR__ . 'http://localhost/PaginaWeb2/vista/mensaje.php';
}
?>
