
//funcion para limpiar forms
function limpiarForms() {
  $('#formulario-agregar').trigger('reset');
  $('#formulario-modificar').trigger('reset');
}


//cancelar formulario de modificacion

function cancelarForm() {
  limpiarForms();
  $('#form-agregar').show();
  $('#form-modificar').hide();

}

/*Funcion para cargar el listado en el Datatable*/
function listarVacunas() {
  tabla = $('#tablalistado').dataTable({
    aProcessing: true, //actiavmos el procesamiento de datatables
    aServerSide: true, //paginacion y filtrado del lado del serevr ../controller/animalController.php?op=listar_tabla'
    dom: 'Bfrtip', //definimos los elementos del control de tabla
    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
    ajax: {
      url: '../../controller/salud/vacunaController.php?op=listar_tabla',
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

// Funcion principal

$(function () {
  $('#form-modificar').hide();
  listarVacunas();
});


// Añadir datos a la db
$('#formulario-agregar').on('submit', function (event) {
  event.preventDefault();
  $('#btnRegistar').prop('disabled', true);
  var formData = new FormData($('#formulario-agregar')[0]);
  $.ajax({
    url: '../../controller/salud/vacunaController.php?op=insertar',
    type: 'POST',
    data: formData,
<<<<<<< HEAD
    contentType: false,  
=======
    contentType: false,
>>>>>>> bryan
    processData: false,
    success: function (datos) {
      switch (datos) {
        case '1':
          toastr.success(
            'Vacuna registrada'
          );
          $('#formulario-agregar')[0].reset();
          tabla.api().ajax.reload();
          break;

        case '2':
          toastr.error(
            'Error al guardar la información, este registro ya existe en la base de datos'
          );
          break;

        case '3':
          toastr.error('Hubo un error al tratar de ingresar los datos.');
          break;
        default:
          toastr.error(datos);
          break;
      }
      $('#btnRegistar').removeAttr('disabled');
    },
  });
});

// funcion para boton modificar
$('#tablalistado tbody').on(
  'click',
  'button[id="modificarDato"]',

  function () {
    var data = $('#tablalistado').DataTable().row($(this).parents('tr')).data();
    limpiarForms();
    $('#form-agregar').hide();
    $('#form-modificar').show();
    $('#XidVacuna').val(data[0]);
    $('#XnombreVacuna').val(data[1]);
    $('#XcasaDistribuidora').val(data[2]);
    $('#Xdescripcion').val(data[3]);
    $('#Xlote').val(data[4]);
    $('#XfechaVencimiento').val(data[5]);
    $('#Xobservaciones').val(data[6]);
    return false;
  }
);

/*Funcion para modificacion de datos de la vacuna*/
$('#formulario-modificar').on('submit', function (event) {
  event.preventDefault();
  bootbox.confirm('¿Desea modificar los datos?', function (result) {
    if (result) {
      var formData = new FormData($('#formulario-modificar')[0]);

      $.ajax({
        url: '../../controller/salud/vacunaController.php?op=modificar',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
          //alert(datos);
          switch (datos) {
            case '0':
              toastr.error('Error: No se pudieron actualizar los datos');
              break;
            case '1':
              toastr.success('Vacuna actualizada exitosamente');
              tabla.api().ajax.reload();
              limpiarForms();
              $('#form-modificar').hide();
              $('#form-agregar').show();
              break;
            case '2':
              toastr.error('Error: no coincide la informacion en la base de datos');
              break;

            default:
              toastr.error(datos);

          }
        },
      });
    }
  });
});

/*Funcion para eliminar datos*/
function eliminar(id) {
  bootbox.confirm('¿Esta seguro de eliminar la enfermedad?', function (result) {
    if (result) {
      $.post(
        '../../controller/salud/vacunaController.php?op=eliminar',
        { idVacuna: id },
        function (data, textStatus, xhr) {
          switch (data) {
            case '0':
              toastr.success('Vacuna eliminada');
              tabla.api().ajax.reload();
              break;

            case '1':
              toastr.error(
                'Error: El dato no se ha podido eliminar.'
              );
              break;

            default:
              toastr.error(data);
              break;
          }
        }
      );
    }
  });
}

