$(document).ready(function () {
  function obtenerAnimalesGrafica() {
      $.ajax({
        url: '../../controller/animales/animalController.php?op=listar_animales_grafica',
        type: "GET",
        data: { obtenerAnimalesGrafica: true },
        dataType: "json",
        success: function (data) {
          console.log(data)
          if (data) {

            const ctx = document.getElementById('graficoAnimal');
            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: data.meses, // Meses obtenidos de PHP
                datasets: [{
                    label: 'Cantidad de Vacas ingresas por Mes',
                    data: data.cantidadAnimales, // Cantidad de animales obtenidas de PHP
                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Color del gráfico
                    borderColor: 'rgba(54, 162, 235, 1)', // Borde del gráfico
                    borderWidth: 1
                }]
            },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
          


          } else {
            console.log("No se encontraron enfermedades");
          }
        },
        error: function (xhr, status, error) {
          console.error(error);
        }
      });
    
    }

  obtenerAnimalesGrafica();

  function listaranimales() {
    tabla = $('#tablaAnimal').dataTable({
      aProcessing: true, //actiavmos el procesamiento de datatables
      aServerSide: true, //paginacion y filtrado del lado del serevr ../controller/animalController.php?op=listar_tabla'
      dom: 'Bfrtip', //definimos los elementos del control de tabla
      buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
      ajax: {
        url: '../../controller/animales/animalController.php?op=listarAnimales',
        type: 'get',
        dataType: 'json',
        error: function (e) {
          console.log(e.responseText);
        }
      },
      bDestroy: true,
      iDisplayLength: 5
    });
  }
  listaranimales();

  $(document).ready(function () {
    $.ajax({
        url: '../../controller/animales/animalController.php?op=listarImage',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            // Assuming you have an array of image objects with 'image_path' property
            data.forEach(function (image) {
                // Create a new carousel item for each image
                var carouselItem = '<div class="carousel-item">' +
                    '<img src="' + image.image_path + '" alt="' + image.caption + '">' +
                    '<div class="carousel-caption d-none d-md-block">' +
                    '<h5>' + image.caption + '</h5>' +
                    '</div>' +
                    '</div>';

                $('#carouselExampleIndicators .carousel-inner').append(carouselItem);
            });

            $('#carouselExampleIndicators .carousel-inner .carousel-item:first').addClass('active');
        },
        error: function (error) {
            console.log('Error loading animal images:', error);
        }
    });
});

});