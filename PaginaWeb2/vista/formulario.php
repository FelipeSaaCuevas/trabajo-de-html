<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="/assets/css/StiloDePagina.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
  <link rel="stylesheet" href="http://localhost/PaginaWeb2/assets/css/StiloDePagina.css">
</head>
<body>
<div class="box has-text-centered has-background-light">
  <form action="http://localhost/PaginaWeb2/controlador/UsuarioController.php" method="post">
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br><br>
     
    <label>Apellido:</label>
    <input type="text" name="apellido" required><br><br>

    <label>Contraseña:</label>
    <input type="password" name="contrasena" required><br><br>

    <label>Rol:</label>
    <select name="rol" required>
      <option value="lector">Lector</option>
      <option value="Escritor">Escritor</option>
    </select><br><br>

    <input type="submit" value="Registrar" class="button is-primary is-large is-fullwidth">
  </form>
</div>
  <h2>Registro de Usuario</h2>
  <br><a href="http://localhost/PaginaWeb2/vista/listado.php">Ver usuarios registrados</a>
</body>
</html>
