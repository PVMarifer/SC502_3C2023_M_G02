
$(document).ready(function () {
  // Función para obtener los animales y llenar el select
  function obtenerAnimalesEnfermos() {
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

  function obtenerAnimalesAntibiotico() {
    $.ajax({
      url: '../../controller/salud/inyeccionAnController.php?op=listar_animales_antibiotico',
      type: "GET",
      data: { obtenerAnimalesAntibiotico: true },
      dataType: "text",
      success: function (data) {
        console.log(data)
        if (data) {
          // Llenar el select con la cantidad de vacas
          $('#card-animales-antibiotico').text(data);
        } else {
          console.log("No se encontraron animales con antibiotico");
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      }
    });
  }

  function obtenerAnimalesMastitis() {
    $.ajax({
      url: '../../controller/salud/mastitisController.php?op=listar_animales_mastitis',
      type: "GET",
      data: { obtenerAnimalesMastitis: true },
      dataType: "text",
      success: function (data) {
        console.log(data)
        if (data) {
          // Llenar el select con la cantidad de vacas
          $('#card-animales-mastitis').text(data);
        } else {
          console.log("No se encontraron animales con mastitis");
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

});

const ctx = document.getElementById('myChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
      label: '# of Votes',
      data: [12, 19, 3, 5, 2, 3],
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





