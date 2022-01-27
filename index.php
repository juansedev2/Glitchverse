<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head> <!-- NO OLIVDAR HACER MEME DE : MI MAMA DICE QUE SOY SUPER, ES DECIR, SERVIDOR DICIENDO: "YO ACLARÉ ESPECIFICAMENTE BUEN RENDIMIENTO EN LA PÁGINA WEB" - YO CON MIS ANIMACIONES EN CSS: "EN MI NAVEGADOR SE VEN SUPER"-->
    <meta charset="utf-8">
    <title>Glitchverse</title>
    <!-- Aquí añado el icono de la página web -->
    <link rel="shortcut icon" href="images/Glitch.jpg">
    <!-- Aquí añado el enlace a estilos.css -->
  <link rel="stylesheet" type="text/css" href="css/estilosHome.css">
  <link rel="stylesheet" type="text/css" href="css/estilosPie.css">
  <!-- Libreria para animaciones que está en la nube -->
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body id ="fondo_home">
    <header>
      <div id="Titulo">
        <h1 class="animate__animated animate__fadeInDown"> GLITCHVERSE</h1>
      </div> <!-- NOTA: TERMINAR DE REFERENCIAR LAS PÁGINAS WEB QUE SE COMPLETEN -->
      <div id="Menu"> <!-- Aquí usaré flexbox -->
        <ul> <!--Lista para navegar entra las páginas-->
          <li id="item"><a href="index.php" class="animate__animated animate__backInDown">Home</a></li>
          <li id="item"><a href="#" class="animate__animated animate__backInDown">Temas</a>
             <ul id="desple">
               <li><a href="pages/web.php">Web</a></li>
               <li><a href="pages/Tecnologia.php">Tecnología</a></li>
               <li><a href="pages/Programacion.php">Programación</a></li>
               <li><a href="pages/Cibersecu.php">Seguridad informática</a></li>
               <li><a href="pages/Videojuegos.php">Videojuegos</a></li>
               <li><a href="pages/Otros.php">Otros</a></li>
             </ul>
             </li>
          <li id="item"><a href="#" class="animate__animated animate__backInDown">Recursos software</a>
            <ul id="desple">
              <li><a href="pages/pagesrecur/Desarrollo.php">Desarrollo</a></li>
              <li><a href="pages/pagesrecur/Seguridad.php">Seguridad</a></li>
              <li><a href="pages/pagesrecur/Videogames.php">Videojuegos</a></li>
              <li><a href="pages/pagesrecur/Multimedia.php">Multimedia</a></li>
            </ul>
          </li>
          <li id="item"><a href="pages/Acerca.php" class="animate__animated animate__backInDown">Acerca de</a>
            <ul id ="desple">
              <li><a href="pages/Avisolegal.php">Aviso legal</a></li>
            </ul>
          </li>
          <li id="item"><a href="pages/Contacto.php" class="animate__animated animate__backInDown">Contacto</a></li>
        </ul>
      </div>
      </header>
      <section class="main">
          <div class="contenedor_titulo">
            <div><img src="images/Glitch.jpg" alt="Imagen no encontrada"></div>
            <div><h1> BIENVENIDO/A </h1></div>
            <div><img src="images/Glitch.jpg" alt="Imagen no encontrada"></div>
          </div>
          <div class="contenedor_contenido">
            <div class="recientes">
              <h1 class="animate__animated animate__backInLeft"> Artículos recientes </h1>
              <table class="tablita">
                  <tr>
                    <td class="title"><a class="enla_titulo" href="pages/pagesgames/Iceberg.php">Iceberg en los videojuegos</a> </td>
                    <td class="description">¿Alguna vez has escuchando acerca del "iceberg" de un videojuego?, ¿sabes lo que es?, este tema es un poco controversial, dependiendo del tema que el iceberg trate, por eso, en este artículo, te hablamos acerca de lo que es un iceberg y algunos ejemplos. Este es un tema interesante y de suspenso, que seguro podría llegarle a gustar a más de uno. Para comenzar, el iceberg se defini como...<a href="pages/pagesgames/Iceberg.php">Leer más...</a> </td>
                    <td> <img src="images/icebergv.jpg" alt="Imagen no encontrada" width="200px" class="animate__animated animate__backInUp"> </td>
                  </tr>
                  <tr>
                    <td class="title"> <a class="enla_titulo" href="pages/pagesweb/Cookies.php">Cookies</a> </td>
                    <td class="description">¿Que són las cookies?: Las cookies vienen siendo un fichero que almacena información y que es enviado desde una computadora a una página web en el momento en que se accede, esto es para ...<a href="pages/pagesweb/Cookies.php">Leer más...</a> </td>
                    <td> <img src="images/cookies.jpg" alt="Imagen no encontrada" width="200px" class="animate__animated animate__backInUp"> </td>
                  </tr>
                  <tr>
                    <td class="title"> <a class="enla_titulo" href="pages/pagesweb/Loba.php">Página Loba</a> </td>
                    <td class="description">¿Que es una página loba?: Las páginas lobas son páginas que en palabras de un desarrollador experto son: "Páginas chambonas", y por "chambón" me refiero a que es mal hecho o tiene mal imagen, sin sentido u otras cosas que se podrían también decir; pero en realidad vienen no vienen siendo algo malo tampoco, es más, las páginas lobas...<a href="pages/pagesweb/Loba.php">Leer más...</a> </td>
                    <td> <img src="images/loba.jpg" alt="Imagen no encontrada" width="200px" class="animate__animated animate__backInUp"> </td>
                  </tr>
                  <tr>
                    <td class="title"> <a class="enla_titulo" href="#">¿Quién es Gl1tch?</a></td>
                    <td class="description"> Si eres antiguo en este blog, has visto en varios lados de nuesto blog la imagen de este personaje; pero... ¿Quién es el?, ¿Porqué esta aquí?, ¿Tiene algún significado?. Estás y mas preguntas las respondemos en este artículo que hemos preparado para hablar acerca del personaje de nuestra página y entenderás porque fue seleccionado para aparecer en  nuestro blog.<a href="#">Leer más...</a> </td>
                    <td> <img src="images/Glitch4.png" alt="Imagen no encontrada" width="200px" class="animate__animated animate__backInUp"> </td>
                  </tr>
              </table>
              <br></br>
            </div>
            <div class="extras_recientes">
              <h1 class="animate__animated animate__backInRight"> Recomendaciones de hoy</h1>
              <div class="videos">
                <h2 class="animate__animated animate__backInRight"> PODCAST </h2>
                <center><iframe width="500" height="315" src="https://www.youtube.com/embed/JDXXhtjIaEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                <h2 class="animate__animated animate__backInRight"> PROGRAMACIÓN </h2>
                <center><iframe width="500" height="315" src="https://www.youtube.com/embed/sW9npZVpiMI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                <br></br>
                <center><iframe width="500" height="315" src="https://www.youtube.com/embed/NDhJfHhe3e4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
              </div>
            </div>
          </div>
      </section>
      <section>
        <div class="para_usuario">
          <h1>¿Eres nuevo? </h1>
          <p> Bienvenido a GLITCHVERSE, un blog web que trabaja en ser lo más particular posibles; pero más importante, en ser un buen blog web, que su contenido sea excelente y útil, que nuestro público esté mas interesado en nuestros temas y sean participes en la búsqueda del conocimiento. Para concer más acerca de nosotros, te invitamos a que explores nuestro sitio web para conocer más acerca de nosotros.</p>
          <br></br>
        </div>
      </section>
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
