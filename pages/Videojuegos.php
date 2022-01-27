<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Videojuegos</title>
    <!-- Aquí añado el icono de la página web -->
    <link rel="shortcut icon" href="../images/Glitch.jpg">
    <!-- Aquí añado el enlace a estilos.css -->
    <link rel="stylesheet" type="text/css" href="../css/estilosVideojuegos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilosPie.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body id = "fondo_games">
    <header>
      <div id="Titulo">
        <h1 class="animate__animated animate__fadeIn"> GLITCHVERSE</h1>
      </div> <!-- NOTA: TERMINAR DE REFERENCIAR LAS PÁGINAS WEB QUE SE COMPLETEN -->
      <div id="Menu"> <!-- Aquí usaré flexbox -->
        <ul> <!--Lista para navegar entra las páginas-->
          <li id="item"><a href="../index.php" class="animate__animated animate__fadeIn">Home</a></li>
          <li id="item"><a href="#" class="animate__animated animate__fadeIn">Temas</a>
             <ul id="desple">
               <li><a href="web.php">Web</a></li>
               <li><a href="Tecnologia.php">Tecnología</a></li>
               <li><a href="Programacion.php">Programación</a></li>
               <li><a href="Cibersecu.php">Seguridad informática</a></li>
               <li><a href="Videojuegos.php">Videojuegos</a></li>
               <li><a href="Otros.php">Otros</a></li>
             </ul>
             </li>
          <li id="item"><a href="#" class="animate__animated animate__fadeIn">Recursos software</a>
            <ul id="desple">
              <li><a href="pagesrecur/Desarrollo.php">Desarrollo</a></li>
              <li><a href="pagesrecur/Seguridad.php">Seguridad</a></li>
              <li><a href="pagesrecur/Videogames.php">Videojuegos</a></li>
              <li><a href="pagesrecur/Multimedia.php">Multimedia</a></li>
            </ul>
          </li>
          <li id="item"><a href="Acerca.php" class="animate__animated animate__fadeIn">Acerca de</a>
            <ul id ="desple">
              <li><a href="Avisolegal.php" class="animate__animated animate__fadeIn">Aviso legal</a></li>
            </ul>
          </li>
          <li id="item"><a href="Contacto.php" class="animate__animated animate__fadeIn">Contacto</a></li>
        </ul>
      </div>
      </header>
      <div class="fondito_os">
      <br>
      <section class="intro">
        <div class="contenedor_intro">
          <h1> VIDEOJUEGOS</h1>
          <p> Los videojuegos son juegos electrónicos, que han producido un gran impacto en la sociedad, ya que con ello, han traido la creación de grandes industrias, comunidades e impactos sociales de gran importancia para el entretenimiento humano. Muchos que podamos estar leyendo esto en este momento, podemos estar de acuerdo en que son un gran modo de entretenimiento, que nos divierte mucho y es una buena manera de hacer algo distinto en nuestras vidas cuando se trata de la cotidianidad.
          </p>
          <p> Acá en GLITCHVERSE, declaramos nuestro gusto a los videojuegos, pues es chévere disfrutar de esta tecnología</p>
        </div>
        <br>
      </section>
      <br>
      <center>
      <section class="contenidos">
        <!-- Tabla para mostrar los contenidos, 1 columna titulo, 2 columna imagen, 3 columna texto con enlace -->
        <!-- Tr es para filas-->
        <!-- Td es para celdas -->
        <!-- th para encabezado de la tabla -->
        <table class="tabla" width="90%">
          <tr>
            <th>TEMA</th>
            <th>DESCRIPCIÓN</th>
            <th>IMAGEN</th>
          </tr>
          <tr>
            <td class="title">Iceberg en los videojuegos</td>
            <td class="description">¿Alguna vez has escuchando acerca del "iceberg" de un videojuego?, ¿sabes lo que es?, este tema es un poco controversial, dependiendo del tema que el iceberg trate, por eso, en este artículo, te hablamos acerca de lo que es un iceberg y algunos ejemplos. Este es un tema interesante y de suspenso, que seguro podría llegarle a gustar a más de uno. Para comenzar, el iceberg se defini como...<a href="pagesgames/Iceberg.php">Leer más...</a> </td>
            <td> <img src="../images/icebergv.jpg" alt="Imagen no encontrada" width="300px" > </td>
          </tr>
          <tr>
            <td class="title">Mejores juegos que han existido según GLITCHVERSE</td>
            <td class="description">En este artículo, GLITCHVERSE te comparte los mejores juegos que han existido a lo largo de la existencia de los viejuegos, incluyendo tanto a clásicos como juegos recientes, además de recomendartelos, por su pusupuesto y corrobores tu mismo que son de lo mejor. Para empezar tenemos...<a href="#">Leer más...</a> </td>
            <td> <img src="../images/trofeo.jpg" alt="Imagen no encontrada" width="300px" > </td>
          </tr>
          <tr>
            <td class="title">¿Consola o Pc?</td>
            <td class="description">Esta guerra de maquinas para jugar, ha tenido sus puntos fuertes por cada bando, así mismo como sus debilidades y como son recibidos por la comunidad gamer. Si bien es cierto, que lo más importante, es jugar y divertirse, hay quienes también le dan lugar a la comodidad y diversión aumentada, además de otras características que analizaremos a fondo.<a href="#">Leer más...</a></td>
            <td> <img src="../images/consolavspc.jpg" alt="Imagen no encontrada" width="300px"> </td>
          </tr>
          <tr>
            <td class="title">Historia de los videojuegos</td>
            <td class="description">La historia de tan grandiosa creación, resulta ser algo de cultura entre la comunidad gamer, ¿porqué no  saber como inició todo?, de paso puedes leer acerca de cosas que ni siquieras sabías o imaginaste. Preguntas como : ¿Cual fue el primer juego de la historia?, ¿La primera consola de videojuegos?, ¿Como llegó la 3D?, esto y más en el siguiente artículo:<a href="#">Leer más...</a> </td>
            <td> <img src="../images/historyg.jpg" alt="Imagen no encontrada" width="300px"> </td>
          </tr>
        </table>
      </section>
    </center>
      <br>
  </div>
      <section class="pie_pagina">
        <div class="p_pag">
          <footer class="pie">
            <h1> GLITCHVERSE </h1>
            <h2> "The system is so imperfect, that it is perfect" </h2>
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" width ="100px" /></a><br />Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">Licencia Creative Commons Atribución-NoComercial-SinDerivadas 4.0 Internacional</a>
            <br></br>
            <h3> Aviso legal | Política de privacidad | Política de cookies | Condiciones de cooperación </h3>
            <br>
          </footer>
        </div>
      </section>
  </body>
</html>
