<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cuestionario de Cookies</title>
    <!-- Aquí añado el icono de la página web -->
    <link rel="shortcut icon" href="../../../images/Glitch.jpg">
    <!-- Aquí añado el enlace a estilos.css -->
    <link rel="stylesheet" type="text/css" href="../../../css/estilosquizcookies.css">
    <link rel="stylesheet" type="text/css" href="../../../css/estilosPie.css">
  </head>
  <body>
    <div class="contenedor">
      <header>
        <h1>Cuestionario de Cookies</h1>
        <h2>Este es un cuestionario basado en el artículo de "Cookies"</h2>
        <h2>Mucha suerte y ante todo honestidad a la hora de resolverlo</h2>
        <br>
      </header>
      <section>
        <br>
        <!-- name para tener referencia directa con este form, onsubmit para actual cuando se presione en enviar, así las respuestas se envian a la funcion indicada-->
          <form name="quizCook" onsubmit="return verificarRespuestas()">
            <h3>1. Las cookies son:</h3>
            <!-- radio es para que una opción que pertenece a un grupo en el que no más de una opción puede ser seleccionada al mismo tiempo y name son las alternativas-->
            <div class="respuesta">
              <input type="radio" name="p1" value="a"> a. Galletas, obvio :v <br/>
              <input type="radio" name="p1" value="b"> b. Archivos que contienen información cuando se ingresa a un sitio web <br/>
              <input type="radio" name="p1" value="c"> c. Función que permite el modelado de galletas animadas<br/>
              <input type="radio" name="p1" value="d"> d. Malware que guarda información de los usuarios <br/>
              <input type="radio" name="p1" value="e"> e. Ninguno de los anteriores <br/>
            </div>

            <h3>2. ¿Las cookies son malware?:</h3>
            <div class="respuesta">
            <input type="radio" name="p2" value="a"> a. Si <br/>
            <input type="radio" name="p2" value="b"> b. No lo és en su teoría; pero es su propósito <br/>
            <input type="radio" name="p2" value="c"> c. No leí el artículo<br/>
            <input type="radio" name="p2" value="d"> d. Ninguno de los anteriores <br/>
            </div>

            <h3>3. Estando en una computadora ajena, ¿es neceario borrar las cookies por seguridad?:</h3>
            <div class="respuesta">
            <input type="radio" name="p3" value="a"> a. Si<br/>
            <input type="radio" name="p3" value="b"> b. No <br/>
            <input type="radio" name="p3" value="c"> c. Me da igual<br/>
            <input type="radio" name="p3" value="d"> d. ¿Que es una cookie? <br/>
          </div>

            <h3>4. En el video: "Sepa porque es importante borrar las cookies", el experto en ciberseguirdad comenta que hay 3 tipos de cookies, ¿cuales són?</h3>
            <div class="respuesta">
            <input type="radio" name="p4" value="a"> a. Persistentes<br/>
            <input type="radio" name="p4" value="b"> b. No, son únicas <br/>
            <input type="radio" name="p4" value="c"> c. No persistentes y flash Cookies<br/>
            <input type="radio" name="p4" value="d"> d. a y c son correctas<br/>
          </div>

            <h3>5. Las Cookies son necesarias en las páginas web ya que proporcionan aspectos de funcionamiento, si se bloquean, ¿el sitio web deja de funcionar <span style="color:red;">totalmente</span>?</h3>
            <div class="respuesta">
            <input type="radio" name="p5" value="a"> a. Depende de la página web<br/>
            <input type="radio" name="p5" value="b"> b. Se daña todo en la página, sin importar cual sea <br/>
            <input type="radio" name="p5" value="c"> c. Es imposible bloquearlas<br/>
            <input type="radio" name="p5" value="d"> d. Niguna es correcta<br/>
          </div>

            <h3>6. El principal funcionamiento en su teoría de las cookies es:</h3>
            <div class="respuesta">
            <input type="radio" name="p6" value="a"> a. Ofrecer comodidad y agilidad en funciones de una página web<br/>
            <input type="radio" name="p6" value="b"> b. Robar a los usuarios <br/>
            <input type="radio" name="p6" value="c"> c. Introducir malware<br/>
            <input type="radio" name="p6" value="d"> d. Hacer spyware<br/>
          </div>
            <!-- Botón-->
            <br></br>
            <input type="submit" value="Enviar">
          </form>
          <div id="resultado"></div> <!-- div para devolver resultado -->
      </section>
    </div>
    <!-- Archivo js para la programación-->
    <script src="../../../js/cookquiz.js">

    </script>
    <section class="pie_pagina">
      <br></br>
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
