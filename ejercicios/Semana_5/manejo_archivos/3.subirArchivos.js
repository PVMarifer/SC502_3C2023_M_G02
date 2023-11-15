$("#form").on("submit", function(e){
  e.preventDefault();
  console.log('sirve');
  // ... resto del código de mi ejercicio
  var formData = new FormData(document.getElementById("form"));
  $.ajax({
    url: "http://localhost/ejercicios/Semana_5/manejo_archivos/recibe.php",
    type: "post",
    dataType: "html",
    data: formData,
    cache: false,
    contentType: false,
    processData: false
  })
      .done(function(res){
        console.log(res)
          $("#mensaje").html("Respuesta: " + res);
      });
});