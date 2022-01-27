<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <!-- Aquí añado el icono de la página web -->
    <link rel="shortcut icon" href="../images/Glitch.jpg">
    <!-- Aquí añado el enlace a estilos.css -->
  <link rel="stylesheet" type="text/css" href="../css/estilosContacto.css">
  <link rel="stylesheet" type="text/css" href="../css/estilosPie.css">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <body id ="fondo_contacto">
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
      <section class="el_formulario">
        <div class="fondito">
          <div class="intro">
            <h1> ¿Deseas contactarte con nosotros?</h1>
            <p> Para contactarte con nosotros, abajo tenemos un formulario para que digites la información que necesitamos. Respecto a eso, la información está protegida y no será ni compartida/vendida/etc., respetamos el derecho a la privacidad, a la protección de la información y los datos, y a utilizarlos estrictamente para lo que se exigen.</p>
            <p> Para profundizar en el tema del porqué se exige esta información, por favor leer nuestra política de privacidad, allí, especificamos el uso de esa información y su tratamiento, que solalmente se limita a nuestro alcance. Ahora, respecto al contacto con nostros, por favor digita la información de manera honesta y asi mismo el asunto, ya que de eso dependerá la respuesta que te daremos. Dependiendo del asunto, te responderemos en tiempo indefinido pero no tardío. En cuanto a la respuesta, la recibiras a tu correo electrónico.</p>
            <br></br>
            <div class="formulario_div">
              <form class="formulario" method="post">
                <em><h2> Toda esta información es estrictamente requerida</h2></em>
                <h1> Registro </h1>
                <label for="">Nombre:</label> <!-- Label es para los títulos de los campos -->
                <br>
                <input type="text" name="nombre"> <!--Input es para entrada de datos y agrego php para que no se borre la información cuando de error en la validación -->
                <label for="">Correo electrónico</label>
                <br>
                <input type="text" name="correo">
                <label for="">Asunto:</label>
                <br>
                <textarea name="asunto" rows="8" cols="80" placeholder="Escriba aquí su asunto de no exceda más de 500 palabras"></textarea>
                <center><input type="submit" name="registro" value="Enviar" id="boton"></center>
              </form>
              <?php
              include("registrar.php");
              
               ?>
            </div>
          </div>
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
