$(document).ready(function () {
  // Función para obtener los animales y llenar el select
  function obtenerAnimalesVacunados() {
    $.ajax({
      url: '../../controller/salud/enfermedadAnimalController.php?op=listar_animales_enfermos',
      type: "GET",
      data: { obtenerAnimalesEnfermos: true },
      dataType: "text",
      success: function (data) {
        console.log(data)
        if (data) {
          // Llenar el select con la cantidad de vacas
          $('#card-animales-enfermos').text(data);
        } else {
          console.log("No se encontraron animales enfermos");
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      }
    });
  }


 
  obtenerAnimalesEnfermos();
  obtenerAnimalesAntibiotico();
  obtenerAnimalesMastitis();
  obtenerEnfermedadesGrafica();
  listarInyecciones();

});


