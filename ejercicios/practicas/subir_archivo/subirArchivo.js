//Obtenemos el form del html
document.getElementById('form').addEventListener('submit', function (e) {
    //decimos que no se cargue la pantalla
e.preventDefault();
    //guardamos lo que est'a en el form en formData
    var formData = new FormData(document.getElementById('form'));
$.ajax({
        url: "http://localhost/ejercicios/practicas/subir_archivo/recibe.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function (res) {
            console.log(res)
            $("#mensaje").html("Respuesta: " + res);
        });
});
