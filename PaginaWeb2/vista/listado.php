<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Usuarios Registrados</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  <link rel="stylesheet" href="http://localhost/PaginaWeb2/assets/css/StiloDePagina.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header class="barraSuperior">
        <h1 class="title">El Faro</h1> 
        <img src="http://localhost/PaginaWeb2/assets/imagenes/logo de faro.webp" alt="" class="logo">
        <div id="hora"></div>
        <nav class="menu" style="color: red;">
            <a href="http://localhost/PaginaWeb2/index.php">Inicio</a>
            <a href="http://localhost/PaginaWeb2/vista/deporte.php">Deporte</a>
            <a href="http://localhost/PaginaWeb2/vista/negocios.php">Negocios</a>
            <a href="http://localhost/PaginaWeb2/vista/login.php">inicio de sesion</a>
        </nav>
    </header>
  <h2>Listado de Usuarios</h2>
  <ul>
    <?php
    $lineas = file(__DIR__ . 'http://localhost/PaginaWeb2/datos.txt');
    foreach ($lineas as $linea) {
        echo "<li>" . htmlspecialchars($linea) . "</li>";
    }
    ?>
  </ul>
  <a href="http://localhost/PaginaWeb2/vista/formulario.php">Volver al formulario</a>
</body>
</html>