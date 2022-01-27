<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sección Web</title>
    <!-- Aquí añado el icono de la página web -->
    <link rel="shortcut icon" href="../images/Glitch.jpg">
    <!-- Aquí añado el enlace a estilos.css -->
  <link rel="stylesheet" type="text/css" href="../css/estilosWeb.css">
  <link rel="stylesheet" type="text/css" href="../css/estilosPie.css">
  <!-- Libreria para animaciones que está en la nube -->
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body id = "fondo_web">
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
    <!--No olvidar hacer el meme de homero aplicando la vacuna de experimentación sobre las cookies.</p>
      Poner algo como: Señor Simpson, al navegar en nuestra página acepta nuestras cookies y de terceros, tenga en cuenta que su privacidad puede estar comprometida, y luego homero responde: Si venga el contenido -->
      <!-- Además del meme de meme o moriré, donde expresaré lo que sentí al hacer la página web: Entonces colocar algo como:
    -OH descuida, si siento deseos de jugar Project64, hablaré con mi proyecto
  -(proyecto de página web)Terminame... OH MORIRÉ....
-Aplicando php a las 2:00 am -->
      <br>
      <section class="intro">
        <div class="contenedor_intro">
          <h1> LA WEB </h1>
          <p> La web en su definición tradicional, es el conjunto de información que se encuentra en un determinado sitio de internet. A simple definción, parece ser algo muy sencillo y corto; pero relamente es mucho más de lo que crees, ¿no te has preguntado alguna vez que tan grade es el internet?, si imaginaras toda la web que existe, tardarías una eternidad en visitar cada sitio web existente. Es curioso que la gente se confunda entre lo que es internet y lo que es la web, esto último es porque se suelen usar mucho para hablar de los mismo; pero NO son lo mismo.</p>
          <p> En otro artículo hablaremos acerca de cada tema y ahí tendrás más claro la diferencia, por eso te invitamos a que explores los temas que el internet y la web ofrecen, ya que actualmente, se han converido en algo casi indispensable para el funcionamiento de la sociedad, ya que vincula muchos aspectos de la sociedad. Es importane saber cosas clave de la web, ya que no resulta para nada bueno, el no tener conocimiento así sea básico, de cosas elementales en la web, ya que no es algo bueno del todo, por eso es importane estar informad. Por supuesto, incluiremos diversos sub-temas y con el énfasis más claro posible.</p>
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
            <td class="title">Cookies</td>
            <td class="description">¿Que són las cookies?: Las cookies vienen siendo un fichero que almacena información y que es enviado desde una computadora a una página web en el momento en que se accede, esto es para ...<a href="pagesweb/cookies.php">Leer más...</a> </td>
            <td> <img src="../images/cookies.jpg" alt="Imagen no encontrada" width="300px" > </td>
          </tr>
          <tr>
            <td class="title">Página Loba</td>
            <td class="description">¿Que es una página loba?: Las páginas lobas son páginas que en palabras de un desarrollador experto son: "Páginas chambonas", y por "chambón" me refiero a que es mal hecho o tiene mal imagen, sin sentido u otras cosas que se podrían también decir; pero en realidad vienen no vienen siendo algo malo tampoco, es más, las páginas lobas...<a href="pagesweb/Loba.php">Leer más...</a></td>
            <td> <img src="../images/loba.jpg" alt="Imagen no encontrada" width="300px"> </td>
          </tr>
          <tr>
            <td class="title">Desarrollo Web</td>
            <td class="description">El desarrollo web viene siendo un tema que sigue y seguirá dando de que hablar, ya que su importancia en la actualidad sigue siendo grande. El desarrollo web no está estancado como muchos pueden pensar, ni es un camino más facil que otros cuando se trata de programación, hay mucho más de lo que se ve a simple vista. El hecho de pensar todo lo que abarca el desarrollo web, dejaría sorprendido a más de uno. Acá en GLITCHVERSE hablaremos de ello; pero de la forma más resumida posible, para empezar...<a href="pagesweb/designweb.php">Leer más...</a> </td>
            <td> <img src="../images/desarrollo web 2.png" alt="Imagen no encontrada" width="300px"> </td>
          </tr>
        </table>
      </section>
    </center>
      <br>
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
