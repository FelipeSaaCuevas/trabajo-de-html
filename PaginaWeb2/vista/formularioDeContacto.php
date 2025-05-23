<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con localStorage</title>
    <link rel="stylesheet" href="StiloDePagina.css">


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

    <div id="contenedorFormulario">
        <form id="formularioContacto" class="Formulario">
            <h2>Formulario de Contacto</h2>
        
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" pattern="[a-zA-Z]" minlength="4" maxlength="10" required>
        
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required title="no a puesto escrito nada en el articulo"></textarea>
        
            <button type="submit">Enviar</button>
        </form>
        <div id="resultado"></div>
    </div>

    <script>
        const formulario = document.getElementById('formularioContacto');
        const resultadoDiv = document.getElementById('resultado');
        function mostrarDatosGuardados() {
            const nombreGuardado = localStorage.getItem('nombre');
            const mensajeGuardado = localStorage.getItem('mensaje');

            if (nombreGuardado && mensajeGuardado) {
                
                resultadoDiv.innerHTML = `
                    <h2>datos guardados:</h2>
                    <p><strong>Nombre:</strong> ${nombreGuardado}</p>
                    <p><strong>Mensaje:</strong> ${mensajeGuardado}</p>
                `;
            }
            else{
                resultadoDiv.innerHTML = `
                    no se a agregado contacto
                `;

            }
        }
        mostrarDatosGuardados();
        formulario.addEventListener('submit', function(e) {
            e.preventDefault();

            const nombre = document.getElementById('nombre').value;
            const mensaje = document.getElementById('mensaje').value;

            localStorage.setItem('nombre', nombre);
            localStorage.setItem('mensaje', mensaje);

            mostrarDatosGuardados();
            formulario.reset();
        });
    </script>
</body>
</html>