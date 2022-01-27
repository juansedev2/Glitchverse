// Funcion para verificar las respuestas
function verificarRespuestas() {

  //Variable del total de pregunta
  var total = 6;
  //Variable de puntaje obtenido
  var puntaje = 0;
  //Variable de referencia al formulario
  var myForm = document.forms["quizCook"];
  //Arreglo para almacenar las repuestas, desde la primera hasta la última
  var respuestas = ["b","d","a","d","a","a"];
  // Iterar cada pregunta para revisarla
  for(var i = 1; i <= total; i++){
    // Revisar cada pregunta, en este caso si no contestó
    // Concateno p + i para evaluar cada pregunta y ahorrar código
    if (myForm["p" + i].value === null || myForm["p" + i].value === "") {
      alert("Debe contestar todas las preguntas, le falta la "+ i);
      return false; // Pare terminar con la iteración innecesaria y de la función
    }else{
      // Comparar si la respuesta es correcta con el arreglo de respuestas
      if(myForm["p" + i].value === respuestas[i-1]){
        puntaje++;
      }
    }
  }
  // Variable para dar el resultado
  var resultado = document.getElementById('resultado');
  if(puntaje < 6){
    resultado.innerHTML ='<h3> Has acertado <span>'+ puntaje +'</span> de <span>'+ total +'</span></h3>';
  }else{
    resultado.innerHTML ='<h3> Has acertado <span>'+ puntaje +'</span> de <span>'+ total +'</span>, felicidades.</h3>';
  }
  return false;
}
