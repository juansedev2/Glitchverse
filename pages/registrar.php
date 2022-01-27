<?php
/*Para la conexión con la base de datos*/
include("labd.php");
/*Para comprobar la conexión a la base de datos
if($conexion){
  echo "Todo está bien";
}else {
  echo "Ya nada está bien";
}
*/
/* Extraer la información, esto se hace con el nombre de las estiquetas de form*/
/*isset me permite ver si se presionó el boton de registro*/
if (isset($_POST['registro'])){
  /* strlen es para ver cuantos caracteres tiene y este condicional me verifica si los campos están vacios o no*/
  if(strlen($_POST['nombre']) > 1 && strlen($_POST['correo']) > 1 && strlen($_POST['asunto']) > 1){
    $nombre = trim($_POST['nombre']);/*trim me permite eliminar espacios de inicio y final de los datos*/
    $correo = trim($_POST['correo']);
    $asunto = trim($_POST['asunto']);
    $fecha_registro = date("d/m/y");
    /* Hacer validaciones de cada dato */
    if(strlen($nombre) > 35){
      ?>
      <h2 class="bad">Nombre demasiado largo</h2>
      <?php
    } else if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) /*función para especificamente filtrar correos */ {
      ?>
      <h2 class="bad">Correo mal digitado o inválido</h2>
      <?php
    }else if (strlen($asunto) > 500) {
      ?>
      <h2 class="bad">El asunto excede el límite de 500 caracteres</h2>
      <?php
    }else{
      /*Variable para la inserción de datos*/
      $consulta = "INSERT INTO datos(nombre, correo, asunto, fecha_registro)
      VALUES ('$nombre','$correo','$asunto','$fecha_registro')";
      $resultado = mysqli_query($conexion, $consulta);
      if($resultado){
        ?>
        <h2 class="ok">Registro realizado correctamente, pronto te responderemos a tu correo</h2>
        <?php
      }else {
        ?>
        <h2 class="bad">Se ha presentado un error</h2>
        <?php
      }
    }
  }
  else {
    ?>
    <h2 class="bad">Complete todos los campos por favor</h2>
    <?php
  }
}
 ?>
