<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Deporte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="http://localhost/PaginaWeb2/assets/css/StiloDePagina.css">

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
    <div id="contenedorAviso"></div>
    <div id="arti">
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
    <h2>Deporte</h2>
    
        <div class="cell" id="articuloDestacado"></div>
    <div class="cell" id="listaArticulos">
        <div class="box" id="listaArticulos">
            <!-- Aquí se cargarán los artículos -->
        </div>
        
        <article class="box">
            <h1>Pellegrini eufórico: Rompió su "maleficio" en el derbi contra el Sevilla y el Betis sigue con su extraordinaria racha en la Liga</h1>
            <br>
            <h2>Deporte</h2>
            <img src="/assets/imagenes/file_20250330182000.jpg" alt="">
            <p>
                Una sonrisa cruza el rostro de Manuel Pellegrini. Este domingo, su Betis remontó y le ganó 2-1 al Sevilla en el clásico disputado en el Benito Villamarín. El DT chileno rompió así un maleficio. Está desde 2020 en el cuadro verdiblanco y, hasta ahora, nunca había podido ganar un derbi andaluz por la Liga.
            </p>
            <p>
                Con la de hoy para el elenco bético ya son seis victorias seguidas en el campeonato español, 
                está en el sexto puesto de la tabla con 47 unidades y mantiene la ilusión de clasificar a Champions. 
                En estos momentos, el Athletic de Bilbao es cuarto con 53 puntos y se quedaría con la última plaza a la Liga de 
                Campeones. Pero quedan nueve fechas. El Betis desde el principio tomó la iniciativa. Se adueñó de la pelota y fue
                a buscar el arco rival, pero fue la visita la que abrió la cuenta. Tras un balón largo desde el fondo, Dodi Lukebakio controló por la derecha y tocó para Rubén Vargas que llegó al área arremetiendo desde atrás. El extremo quedó cara a cara con Adrián y no perdonó a los 17'. Pero la escuadra del "Ingeniero" no renunció a su plan y solo le tomó seis minutos igualar el marcador. Youssouf Sabaly recibió dentro del área, levantó el centro y Johnny Cardoso remató de volea e hizo explotar el estadio. El partido era muy intenso. Los heliopolitanos apostaban por el ataque construido, mientras que los nervionenses eran peligrosos a la contra. Se jugaba en medio de un clima muy tenso. Hubo cruces entre los jugadores, varios reclamos al árbitro y el público estaba enardecido. Ya en los descuentos del primer tiempo, el Betis encontró el segundo. Isco recibió y de primera metió un pase exquisito. Dejó solo a Juan Camilo Hernández y el colombiano definió de gran manera. No hubo tantas emociones en los arcos durante la segunda mitad. Antony y Cardoso estuvieron cerca de hacer el tercero de los dueños de casa. Lo más peligroso del Sevilla fue un tiro libre de Nemanja Gudelj que sacó Adrián. Pellegrini celebró eufórico al escuchar el pitazo final. La segunda mitad de temporada de su elenco está siendo magnífica. El próximo sábado visitará al FC Barcelona y el 10 de abril se medirá con el Jagiellonia por el duelo de ida de los cuartos de final de la Conference League.

            </p>
            <audio src="" controls></audio>
        </article>        
        <article class="box">
            <h1>
            La opinión de Arturo Vidal sobre la continuidad de Ricardo Gareca al frente de la selección
            </h1>
            <br>
            <img src="/assets/imagenes/file_20250330170253.jpg" alt="">
            <h2>Deporte</h2>
            <p>
                Este domingo, el plantel de Colo Colo emprendió rumbo a Colombia de cara a su esperado estreno por Copa Libertadores, fijado para las 21 horas del martes primero de abril, día en que enfrentarán a Atlético Bucaramanga. Antes de subirse al avión, el volante Arturo Vidal entregó su pálpito de cara al pleito con el cuadro cafetalero, dejando en claro que al margen de la irregularidad mostrada en el plano local, quieren arrancar su actuación con una victoria.
            </p>
            <p>
            "Estamos espectacular. De verdad de que vamos con mucha ilusión, creo que es muy importante comenzar con el pie derecho. Claramente va a hacer un partido duro contra un equipo que debuta en la Libertadores, así que hemos trabajado bien, están todos los jugadores bien, al 100%, así que también eso es muy bueno", partió señalando el "King". En la misma línea, el mediocampista enfatizó que "uno se motiva mucho más a jugar estos partidos, va representando al país, representando a Colo Colo, que siempre es lindo jugar afuera y creo que este año tenemos un objetivo muy claro que es ganar la segunda". Con respecto a su rival, el oriundo de San Joaquín señaló que "todavía quedan dos días para seguir viendo videos, claramente tienen jugadores muy buenos, así que vamos a analizar bien. No queremos decir nada de Bucaramanga, queremos demostrarlo en el partido y ahí mostrar la falencia que tengan". Por último, Vidal fue consultado por la continuidad del técnico de la Selección chilena, Ricardo Gareca, luego de una reunión que sostuvo con el presidente de la ANFP, Pablo Milad. "Me alegro que se quede", fue la escueta respuesta que entregó el referente de la Roja.
            </p>
            <audio src="" controls>a</audio>
        </article>        
        <article class="box">
            <h1>El tremendo escándalo que remece a la gimnasia y al Comité Olímpico de Italia</h1>
            <br>
            <img src="/assets/imagenes/file_20250330122837.jpg" alt="">
            <h2>Deporte</h2>
            <p>
                El italiano Andrea Facci, presidente de la Federación de Gimnasia Italiana (FGI) desde hace menos de un mes, está el punto de mira por un escándalo sexista después de que salieran a la luz conversaciones telefónicas en las que realizó comentarios machistas y ofensivos sobre una de las gimnastas italianas, Ginevra Parrini, a la que calificó como "un coño precioso". Apenas unas horas después de que Emanuela Maccarani -histórica seleccionadora italiana que llevaba en el cargo 30 años- fuera apartada definitivamente de su puesto por las acusaciones de maltrato que varias deportistas hicieron públicas en 2022, un nuevo escándalo sacudió a la gimnasia italiana. Está ligeramente relacionado con el mencionado tema de los supuestos abusos de Maccarani -caso todavía bajo investigación- e incluye también al anterior presidente de la FGI, Gherardo Tecchi, aunque el contenido de las conversaciones interceptadas por las autoridades no afectará en la sentencia sobre Maccarani al no hablar de los supuestos abusos de la seleccionadora.
            </p>
            <p>
                Todo empezó en 2022, cuando las gimnastas Nina Corradini y Anna Basta -entre otras- desvelaron y relataron el calvario y las humillaciones que vivieron durante sus entrenamientos con Maccarani, como tener que pesarse delante de sus compañeras y haber sido insultadas por el cuerpo técnico. Fue Ginevra Parrini el mayor apoyo de las jóvenes gimnastas, pues ratificó la versión de sus compañeras en varios medios de comunicación italianos aumentando la polémica. La Fiscalía de Monza (norte) comenzó entonces una investigación sobre los posibles abusos e interceptó una llamada entre ambos mandatarios, Facci y Tecchi, en la que criticaban a Parrini y en la que se refirieron a ella con numerosos comentarios sexistas, publicados en las últimas horas por los medios italianos. "¡Nunca fue una mariposa (término utilizado para referirse a gimnastas italianas)!", comenzó Tecchi, por aquel entonces presidente de la FGI. "Parrini hizo veinte días de entrenamiento y luego nada más, ¡ni siquiera con la selección! Es un coño (vagina) precioso... y le interesaba que la vieran (en televisión)", añadió. "Es un coño precioso, precioso", refrendó y respondió entre risas -según la transcripción- Facci, actual presidente y por aquel entonces director deportivo de la selección masculina de gimnasia artística. "Te cuento una cosa. Me escribió un mensajito Corrado Dones (presidente del comité regional de la federación en Emilia-Romaña) y me dijo: 'no sé quién coño es esta Parrini pero yo la haría presidenta'. Yo le dije: 'Corrado, solo porque esté buena no puedes hacerla presidenta'. Y me dijo: 'Ni siquiera sé quien es pero está buenísima'", añadió Facci. Lejos de frenar, Tecchi continuó con los comentarios sexistas: "En la primera entrevista fue en pantalón, la segunda en falda y la tercera con la minifalda que se le veía hasta el alma". La conversación ha generado una polémica gigante en Italia y la continuidad de Facci al frente de la FGI está comprometida por esos comentarios machistas. El presidente del Comité Olímpico Nacional Italiano (CONI), Giovanni Malagò, aseguró que había hablado con Facci y que éste había pedido disculpas a la gimnasta y reconocido el error. "Facci me aseguró haber hablado con la atleta y haberle pedido disculpas tras reconocer que se había equivocado", dijo el mandatario. Pese a las disculpas de Facci, la Fiscalía General del Deporte del CONI abrirá este lunes una investigación oficial tras la publicación de las escuchas telefónicas.
            </p>
            <audio src="" controls></audio>

        </article>
    </div>
    <footer>
        <button class="button"><a href="formulario de contacto.html">formulario de contacto</a></button>
        <h3>
            Linkografia
        </h3>
        <ol>
            <li class="column">
                <a href="https://www.emol.com/noticias/Economia/2025/03/28/1161943/economia-consumidores-chile.html">
                    https://www.emol.com/noticias/Economia/2025/03/28/1161943/economia-consumidores-
                    chile.html
                </a>
            </li>
            <li class="column">
                <a href="https://www.emol.com/noticias/Economia/2025/03/28/1161944/dolar-mercado-cambiario-
                local.html">
                https://www.emol.com/noticias/Economia/2025/03/28/1161944/dolar-mercado-cambiario-
                local.html
                </a>
            </li>
            <li class="column">
                <a href="https://www.emol.com/noticias/Economia/2025/03/28/1161930/codelco-resultados-2024.html">
                    https://www.emol.com/noticias/Economia/2025/03/28/1161930/codelco-resultados-2024.html
                </a>
            </li>
            <li>
                <a href="https://www.freecodecamp.org/espanol/news/tamano-de-fuente-html-como-cambiar-el-tamano-del-texto-usando-el-estilo-css-en-linea/">
                    https://www.freecodecamp.org/espanol/news/tamano-de-fuente-html-como-cambiar-el-tamano-del-texto-usando-el-estilo-css-en-linea/
                </a>
            </li class="column">
        </ol>
    </footer>
    <button onclick="mostrarOcultar()">Mostrar/Ocultar formulario</button>
    <script src="/assets/js/reloj.js"></script>
    <script src="/assets/js/agregar.js"></script>
    <script src="/assets/js/mostrar.js"></script>
</body>
</html>