<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web de Noticias</title>
    <link rel="stylesheet" href="http://localhost/PaginaWeb2/assets/css/StiloDePagina.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
</head>
<body>
    <a href="prueva.php">Formulario de artículo</a>
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

    <div class="cell" id="arti">
        <h2>Agregar nuevo artículo</h2>
        <form id="formArticulo">
           <div class="descripcion">
            <label for="titulo">Título del artículo:</label>
            <input type="text" id="titulo" required>
            
            <label for="descripcion">Descripción del artículo:</label>
            <textarea id="descripcion"  rows="4" required class="descripcion"></textarea>
            <button type="submit">Agregar artículo</button>
         </div>
        </form>
        <button onclick="mostrarOcultar()">Mostrar/Ocultar formulario</button>
   
    </div>

    <div id="contenedorAviso"></div>
    <h2>Noticias</h2> 
    <div id="articuloDestacado"></div>
    <div class="cell" id="listaArticulos">
        <div id="listaArticulos">
            <!-- Aquí se cargarán los artículos -->
        </div>
        <div class="cell" id="listaArticulos">
        <div id="listaArticulos">
            <!-- Aquí se cargarán los artículos -->
        </div>
        <article class="noticias1">
            <h1>Encuentran cadáver de hombre en sector El Arenal de Valdivia</h1>
            <br>
            
            <video src="" controls  ></video>
            <img src="/assets/imagenes/social-encuentran-cadaver-valdivia.jpg" alt="">
            <p>
                Una serie de diligencias se desarrollan este lunes en el sector El Arenal de Valdivia, en la región de Los Ríos, a causa del hallazgo de un cadáver.

Hasta dicho igual, ubicado en el extremo norte de la capital regional, acudieron detectives de la Brigada de Homicidios de la PDI junto a personal del Laboratorio de Criminalística para adoptar el procedimiento de rigor.

De acuerdo con la información recabada por Radio Bío Bío, el hallazgo del cuerpo se dio en medio de las labores de búsqueda del exdocente de la Universidad Austral, Mauricio López Sierra, a quien se le perdió el rastro el 19 de marzo.
            </p>
            <h2>Cuerpo no ha sido identificado</h2>
            <p>
                El fiscal José Rivas confirmó que lo anterior ocurrió en el marco de la investigación por la denuncia de presunta desgracia presentada por la esposa del extraviado.

                Es así que con el apoyo de un dron, se logró encontrar el cuerpo de un hombre adulto y ahora se trabaja en la extracción del mismo. Esto porque, según relató el persecutor, está en una especie de quebrada, de difícil acceso y en una zona boscosa.
                
                También precisó en las cercanías del lugar se encontraron prendas de ropa.

                Tras la extracción del cuerpo, se procederá al examen externo del cadáver para que la Brigada de Homicidios de la PDI pueda establecer las circunstancias del fallecimiento.

Es por ello que de momento no es posible definir la identidad del fallecido.
            </p>
            <audio src="" controls></audio>
        </article>        
        <article class="noticias1">
            <h1>Chilena se certifica como guía extrema en Finlandia: "Supe de inmediato que era el lugar adecuado"</h1>
            <br>
            <video src="" controls ></video>
            <p>
                Catherine Ghersi se convirtió en la primera chilena certificada como guía extrema en Finlandia, quien ahora goza de su propio emprendimiento, rodeada de helados y únicos paisajes a miles de kilómetros de su país natal.

Fue gracias a su antiguo puesto de guía en San Pedro de Atacama, que la chilena identificó cuál sería su futuro laboral (lejos de Chile). Se mudó a Tampere, Finlandia, tras conocer a su actual esposo, donde encontró una perfecta alternativa para ejercer en el país nórdico.
“Encontré ese programa de guía silvestre, a cincuenta kilómetros de la ciudad, que impartía formación en inglés. Supe de inmediato que era el lugar adecuado para mí”, relata para el medio EntrepreNerd.
Ghersi se formó en el programa International Wilderness Guide, alcanzando una certificación que, según mencionó al medio citado, ninguna otra persona de nacionalidad chilena posee en el país nórdico.

La preparación incluyó supervivencia en bosques cercanos a la frontera con Rusia y travesías en Laponia con temperaturas inferiores a los -30 °C.
            </p>
            <h2>Chilena certificada como guía extrema, crea su propio emprendimiento en Finlandia</h2>
            <p>
                La chilena trabajó por un tiempo en el turismo de Finlandia para averiguar cómo funcionaba el mercado y así dar vida a su propia agencia.
                Catherine se desmpeñó como guía de auroras boreales en la Laponia finlandesa, lideró actividades en nieve, sauna y pesca en hielo. Con todo ello logró hacer redes de contacto al trabajar en hoteles temáticos y operadores locales.

Su experiencia la motivó a crear Nomade Tourism en 2018, con algunas dificultades, pero con un foco distintivo: destinos y actividades únicas con grupos pequeños, donde lo primordial es la experiencia de calidad.

“Prefiero grupos pequeños, de máximo ocho personas, porque me interesa que aprendan la cultura y la naturaleza de forma auténtica. Trabajé en agencias grandes que llevaban hasta cuarenta pasajeros a la vez, y ahí sentí que algunos visitantes no se iban con una vivencia profunda”, reveló al medio.

Actualmente, la agencia que dirige la chilena funciona durante todo el año, con énfasis en la temporada invernal por la demanda de auroras boreales, trineos con perros y recorridos en bosques con raquetas de nieve, con proyeccciones a mediano plazo de ampliar sus circuitos hacia la zona occidental del país y seguir entregando experiencias únicas.

            </p>
            <audio src="" controls></audio>
        </article>        
        <article class="noticias1">
            <h1>Squella condiciona apoyo a Matthei en segunda vuelta: lo entregarán solo si cumple ciertas garantías</h1>
            <br>
            <img src="/assets/imagenes/Captura de pantalla 2025-03-31 163536.png" alt="">
            <video src="" controls ></video>
            <p>
                El presidente del Partido Republicano, Arturo Squella, despejó dudas respecto de si apoyarán como conglomerado a Evelyn Matthei, candidata de Chile Vamos, en una eventual segunda vuelta presidencial.

                Esto, a propósito del eventual respaldo que Johannes Kaiser, líder del Partido Nacional Libertario (PNL), podría entregarle a la exalcaldesa si es que esta cumple con algunas condiciones, tales como no crear nuevos ministerios.
                Así, en conversación con CNN Chile Radio, el timonel Republicano indicó que expresarán su apoyo al candidato del sector que pase a segunda vuelta, siempre y cuando se cumplan ciertas garantías.

“Evidentemente que a quien pase nos vamos a colgar de sus mismas palabras. Y si es que, por ejemplo, fuera Matthei y ella quisiera avanzar en una ley de aborto, como lo ha insinuado, por supuesto, que para nosotros sería fundamental de que no lo hiciera”, comentó.

En lo que refiere a las garantías que establecerán para entregar su apoyo presidencial, Squella sostuvo que estas se la expresarán al respectivo candidato en su momento y en persona, más no a través de la prensa.
“Ya vimos que eso no es conveniente hacerlo por la prensa. Al final del día tú estás diciendo ‘mire, voy a poner algún par de condiciones que no sea posible de cumplir’ y con eso me lavo las manos y no la apoyo”, añadió.

Por último, aclaró que para “nosotros es tan importante que gane alguien distinto a quienes gobiernan hoy día que, por supuesto, vamos a buscar la manera de que esté todo dispuesto para que efectivamente se logre el propósito”.

“Nosotros estamos esperando todavía el pronunciamiento de Evelyn Matthei, que no lo ha hecho, de que apoyaría a cualquier persona de la oposición si es que ella no pasa a segunda vuelta, que es muy probable”, concretó.
            </p>
            <audio src="" controls></audio>
        </article>

        <!-- Aquí irían los artículos hardcodeados. Puedes incluso ponerlos dinámicamente con PHP más adelante -->
        <?php include('articulos.php'); ?>
    </div>

    <footer>
        <button class="button"><a href="formulario_de_contacto.php">Formulario de contacto</a></button>
        <h3>Linkografía</h3>
        <ol>
            <li class="column"><a href="https://www.emol.com/noticias/Economia/2025/03/28/1161943/economia-consumidores-chile.html">Noticia 1</a></li>
            <li class="column"><a href="https://www.emol.com/noticias/Economia/2025/03/28/1161944/dolar-mercado-cambiario-local.html">Noticia 2</a></li>
            <li class="column"><a href="https://www.emol.com/noticias/Economia/2025/03/28/1161930/codelco-resultados-2024.html">Noticia 3</a></li>
            <li class="column"><a href="https://www.freecodecamp.org/espanol/news/tamano-de-fuente-html-como-cambiar-el-tamano-del-texto-usando-el-estilo-css-en-linea/">Artículo sobre CSS</a></li>
        </ol>
    </footer>

    <script src="/assets/js/reloj.js"></script>
    <script src="/assets/js/agregar.js"></script>
    <script src="/assets/js/mostrar.js"></script>
</body>
</html>