<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recursos para desarrollo</title>
    <!-- Aquí añado el icono de la página web -->
    <link rel="shortcut icon" href="../../images/Glitch.jpg">
    <!-- Aquí añado el enlace a estilos.css -->
    <link rel="stylesheet" type="text/css" href="../../css/estilosDesarrollo.css">
    <link rel="stylesheet" type="text/css" href="../../css/estilosPie.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body id ="fondo_desa">
    <header>
      <div id="Titulo">
        <h1 class="animate__animated animate__fadeIn"> GLITCHVERSE</h1>
      </div>
      <div id="Menu"> <!-- Aquí usaré flexbox -->
        <ul> <!--Lista para navegar entra las páginas-->
          <li id="item"><a href="../../index.php" class="animate__animated animate__fadeIn">Home</a></li>
          <li id="item"><a href="#"  class="animate__animated animate__fadeIn">Temas</a>
             <ul id="desple">
               <li><a href="../web.php">Web</a></li>
               <li><a href="../Tecnologia.php">Tecnología</a></li>
               <li><a href="../Programacion.php">Programación</a></li>
               <li><a href="../Cibersecu.php">Seguridad informática</a></li>
               <li><a href="../Videojuegos.php">Videojuegos</a></li>
               <li><a href="../Otros.php">Otros</a></li>
             </ul>
             </li>
          <li id="item"><a href="#" class="animate__animated animate__fadeIn">Recursos software</a>
            <ul id="desple">
              <li><a href="../pagesrecur/Desarrollo.php">Desarrollo</a></li>
              <li><a href="../pagesrecur/Seguridad.php">Seguridad</a></li>
              <li><a href="../pagesrecur/Videogames.php">Videojuegos</a></li>
              <li><a href="../pagesrecur/Multimedia.php">Multimedia</a></li>
            </ul>
          </li>
          <li id="item"><a href="../Acerca.php"  class="animate__animated animate__fadeIn">Acerca de</a>
            <ul id ="desple">
              <li><a href="../Avisolegal.php">Aviso legal</a></li>
            </ul>
          </li>
          <li id="item"><a href="../Contacto.php"  class="animate__animated animate__fadeIn">Contacto</a></li>
        </ul>
      </div>
    </header>
    <br></br>
    <div class="adver">
        <h1>LOS ENLACES QUE COMPARTIMOS SON 100% LEGALES Y SEGUROS </h1>
    </div>
    <br></br>
    <section class="contenido">
        <br></br>
        <center><table class="tabla" width = "90%">
          <!-- Fila 1 -->
          <tr>
          <td><img src="../../images/pseint.png" alt="Imagen no encontrada"></td>
          <td> <h1>Pseint</h1>
            <h3> Software para aprender a programar</h3>
            <br>
            <a href="http://pseint.sourceforge.net/" class="enlace" target="_blank">Enlace de descarga</a>
           </td>
           <td><img src="../../images/apache.png" alt="Imagen no encontrada" width="55%"></td>
           <td> <h1>Apache Netbeans IDE 12.0</h1>
             <h3 class="elh3">IDE especial para JAVA (aunque se puede usar otros lenguajes)</h3>
             <br>
             <a href="https://netbeans.apache.org/download/index.html" class="enlace" target="_blank">Enlace de descarga</a>
            </td>
            <td><img src="../../images/dev.png" alt="Imagen no encontrada" width="150px"></td>
            <td> <h1>Dev-C++</h1>
              <h3>IDE para el lenguaje C/C++</h3>
              <br>
              <a href="https://mega.nz/file/cIBDRCTS#83Kg0i_QxXA65Z9bXSO6WlBKKJqGvxVP0nbEfs1VqF4" class="enlace" target="_blank">Enlace de descarga</a>
             </td>
          </tr>
          <!-- Fila 2 -->
          <tr>
             <td><img src="../../images/pycharm.png" alt="Imagen no encontrada" width="40%"></td>
             <td> <h1>PyCharm</h1>
               <h3>IDE para Python</h3>
               <br>
               <a href="https://www.jetbrains.com/es-es/pycharm/" class="enlace" target="_blank">Enlace de descarga</a>
              </td>
              <td><img src="../../images/intellij.png" alt="Imagen no encontrada"width="65%"></td>
              <td> <h1>Intellij IDEA</h1>
                <h3>IDE para diversos lengujaes como Java, Python y GO</h3>
                <br>
                <a href="https://www.jetbrains.com/es-es/idea/download/#section=windows" class="enlace" target="_blank">Enlace de descarga</a>
               </td>
               <td><img src="../../images/visual.png" alt="Imagen no encontrada"width="250px"></td>
               <td> <h1>Visual Studio Code</h1>
                 <h3>Editor de código fuente interesante, que si soporta varios lenguajes y con interfaz muy colaborativa</h3>
                 <br>
                 <a href="https://code.visualstudio.com/download" class="enlace" target="_blank">Enlace de descarga</a>
                </td>
          </tr>
          <!-- Fila 3 -->
          <tr>
             <td><img src="../../images/Atom.png" alt="Imagen no encontrada" width="45%"></td>
             <td> <h1>Atom</h1>
               <h2> (Recomendado)</h2>
               <h3>Editor de código, soporta varios lenguajes y que puede ser usado como IDE</h3>
               <br>
               <a href="https://atom.io/" class="enlace" target="_blank">Enlace de descarga</a>
              </td>
              <td><img src="../../images/gitbash.png" alt="Imagen no encontrada"width="65%"></td>
              <td> <h1>Git (Gitbash)</h1>
                <h3>Sistema de control de versiones de desarrollo de software</h3>
                <br>
                <a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git" class="enlace" target="_blank">Enlace de descarga</a>
               </td>
               <td><img src="../../images/github.png" alt="Imagen no encontrada"width="150px"></td>
               <td> <h1>GitHub Desktop</h1>
                 <h3>Software para interactuar con GitHub usando GUI</h3>
                 <br>
                 <a href="https://docs.github.com/es/desktop/installing-and-configuring-github-desktop/installing-github-desktop" class="enlace" target="_blank">Enlace de descarga</a>
                </td>
          </tr>
          <!-- Fila 4 -->
          <tr>
            <td><img src="../../images/ciscop.png" alt="Imagen no encontrada"width="45%"></td>
            <td> <h1>Cisco Packet Tracer</h1>
              <h3>Software de simulación de redes</h3>
              <br>
              <a href="https://docs.github.com/es/desktop/installing-and-configuring-github-desktop/installing-github-desktop" class="enlace" target="_blank">Enlace de descarga</a>
             </td>
             <td><img src="../../images/mysql.png" alt="Imagen no encontrada" width="100%"></td>
             <td> <h1>MySQL Workbench</h1>
               <h3>Software para desarrollo de RDBMS (Bases de datos relacionales)</h3>
               <br>
               <a href="https://dev.mysql.com/downloads/mysql/" class="enlace" target="_blank">Enlace de descarga</a>
              </td>
          </tr>
        </table></center>
        <br></br>
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
