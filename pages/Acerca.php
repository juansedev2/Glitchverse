<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acerca de GLITCHVERSE</title>
    <!-- Aquí añado el icono de la página web -->
    <link rel="shortcut icon" href="../images/Glitch.jpg">
    <!-- Aquí añado el enlace a estilos.css -->
  <link rel="stylesheet" type="text/css" href="../css/estilosAcerca.css">
  <link rel="stylesheet" type="text/css" href="../css/estilosPie.css">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body id = "fondo_acerca">
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
              <li><a href="Avisolegal.php">Aviso legal</a></li>
            </ul>
          </li>
          <li id="item"><a href="Contacto.php" class="animate__animated animate__fadeIn">Contacto</a></li>
        </ul>
      </div>
      </header>
      <div id="Quienes_somos">
        <h1>¿Quienes somos?</h1>
          <div id="texto">
            <p> GLITCHVERSE es un blog web dedicado a la informática en diferentes ámbitos, por ejemplo las noticias, el entretenimiento, tecnología nueva, etc.
             Es un espacio para diversos consumidores, desde los amantes de la investigación en internet, hasta los gamers, desarrolladores, gente corriente adentrándose en la informática, etc.<br>
            <br>Es un blog web que está en crecimiento, con la gran disposición de seguir mejorando la información que compartimos, para que sea verídica, segura y sobre todo, util.
            Somos una entidad sin ánimo de lucro, todo esto lo hacemos por nuestro gran interés en compartir conocimiento, el gusto a la informática y querer aportar algo útil a la gente que le gusta informarse bien.</p>
          </div>
        </div>
          <div id="Ofrecemos">
            <h1>¿Que ofrecemos?</h1>
            <div id="texto2">
              <p> En GLITCHVERSE, encontrarás multiples recursos online para diversos tipos de intereses, desde información e investigación, hasta entretenimiento, todo por supuesto, en contexto de informática.
                 Desglosamos la informática a nuestro criterio bajo los grupos que verás a continuación, ya que son las que consideramos más interesantes e importantes para nuestro blog, tratando de abarcar lo mejor posible los temas.
                <br> Eso sí, te invitamos a que leas con mucha atención lo que te mostramos y que explores todo lo demás que compartimos. Eso sí, esperamos mucho que te guste.
              </p>
            </div>
          </div>
          <!-- Temas -->
          <section class="seccion_web">
            <div class="contenedor">
              <div class="descrip_web">
                <h1> WEB </h1>
                <h3> Noticias, artículos, recursos, eventos trascendentales </h3>
              </div>
              <div class="imagen_web">
                <img src="../images/arreglado1.jpg" alt="Imagen no encontrada" width="950px" height="590px">
              </div>
            </div>
          </section>

          <section class="seccion_tecno">
              <div class="contenedor2">
                <div class="imagen_tecno">
                  <img src="../images/tecnologia.jpg" alt="Imagen no encontrada" width="100%">
                </div>
                <div class="descrip_tecno">
                  <h1> TECNOLOGÍA </h1>
                  <h3> Noticias, artículos, avances, documentales, etc. </h3>
                </div>
            </div>
          </section>

          <section class="seccion_program">
          <div class="contenedor3">
            <div class="descrip_program">
              <h1> PROGRAMACIÓN </h1>
              <h3> Software, tendencias, recomendaciones, recursos </h3>
            </div>
            <div class="imagen_program">
              <img src="../images/desarrollo.jpg" alt="Imagen no encontrada" width="100%" height="590px">
            </div>
          </div>
      </section>

      <section class="seccion_security">
        <div class="contenedor4">
          <div class="ima_security">
              <img src="../images/seguridad.jpg" alt="Imagen no encontrada" width="100%" height="627px">
          </div>
          <div class="descrip_security">
            <h1> CIBERSEGURIDAD</h1>
            <h3> Artículos, software, consejos, noticias, trucos, críticas</h3>
          </div>
        </div>
      </section>

      <section class="seccion_videojuegos">
        <div class="contenedor5">
          <div class="descrip_games">
            <h1> VIDEOJUEGOS</h1>
            <h3> Críticas, recomendaciones, noticias y gameplays</h3>
          </div>
          <div class="ima_games">
            <img src="../images/video games.png" alt="Imagen no encontrada" width="100%" height="640px">
          </div>
        </div>
      </section>

      <section class="otros">
        <div class="descrip_final">
          <h1> Y MUCHO MÁS SI ASÍ LLEGA A SER </h1>
          <p> Nuestro temas principales nunca van a cambiar, pues son nuestra fuente de interés, más sin embargo, estamos abieros a crecer y tratar temas que el público presente de interés, eso sí, siempre que sean adecuados y adaptables al público en general.</p>
          <p> También ofrecemos diversos recursos, como por ejemplo software gratuito de diversas aplicaciones, recomendaciones, y todo esto con total seguridad. No siempre la calidad cuesta, a veces solo hace falta investigar, compartir y adpatarse.</p>
          <p> Siempre puedes ponerte en contacto con nosotros, si tienes alguna duda, aporte o cualquier cosa relacionada con tu participación en este blog, con gusto será recibida, no olvides compatirnos a tu círculo social que también este interesado en estos temas.</p>
          <p> POR FAVOR REVISA NUESTRO AVISO LEGAL Y LA LICENCIA CREATIVE COMMONS ANTES DE COMETER ALGÚN ERROR CON NOSOTROS, YA QUE ESO NO LO ADMITIMOS POR NINGÚN MOTIVO.</P>
          <p> Sin más que agregar, explora nuestra web y divierteté con el conocimiento.</p>
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
