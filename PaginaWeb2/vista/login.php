<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
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
<div class="box has-text-centered has-background-light mt-5, mb -5">
  <h2>Inicio de Sesión</h2>
  <form action="http://localhost/PaginaWeb2/controlador/UsuarioController.php" method="post" class="">
    <input type="hidden" name="accion" value="login">

    <label>Nombre de Usuario:</label>
    <input type="text" name="nombre" minlength="5" maxlength="10" required><br><br>

    <label>Contraseña:</label>
    <input type="password" name="contraseña" required><br><br>

    <input type="submit" value="Iniciar Sesión" class="button is-light">
  </form>

  <p>¿No tenés cuenta? <button class="button is-primary"><a href="http://localhost/PaginaWeb2/vista/formulario.php" style="color: blue;">Registrarse</a></button></p>
</div>
</body>
</html>
