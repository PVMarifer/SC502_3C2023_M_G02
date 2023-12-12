$(document).ready(function() {
    $('.select2').select2();
    // Función para obtener los animales y llenar el select
    function obtenerAnimales() {
        $.ajax({ 
            url: '../../controller/animales/animalController.php?op=listar_animales',
            type: "GET",
            data: { obtenerAnimales: true },
            dataType: "json",
            success: function(data) {
                if (data) {
                    // Llenar el select con las vacas obtenidas
                    $.each(data, function(index, animal) {
                        $('#selectAnimales').append('<option value="' + animal.id_animal + '">' + animal.numero_arete + '</option>');
                    });
                } else {
                    console.log("No se encontraron animales.");
                }  
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
  
  
  
    // Llamar a la función para obtener las vacas cuando el documento esté listo
    obtenerAnimales();

  });
  
    //funcion para limpiar forms
    function limpiarForms() {
      $('#formulario-agregar').trigger('reset');
      $('#formulario-modificar').trigger('reset');
    }
  
  

  
    /*Funcion para cargar el listado en el Datatable*/
    function listarAnimaleServicio() {
      tabla = $('#tablalistado').dataTable({
        aProcessing: true, //actiavmos el procesamiento de datatables
        aServerSide: true, //paginacion y filtrado del lado del serevr ../controller/servicioController.php?op=listar_tabla'
        dom: 'Bfrtip', //definimos los elementos del control de tabla
        buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
        ajax: {
          url: '../../controller/reproduccion_celos/servicioController.php?op=listar_tabla',
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
      listarAnimaleServicio();
    });
  
  
    // Añadir datos a la db
    $('#formulario-agregar').on('submit', function (event) {
      event.preventDefault();
      $('#btnRegistar').prop('disabled', true);
      var formData = new FormData($('#formulario-agregar')[0]);
      $.ajax({
        url: '../../controller/reproduccion_celos/servicioController.php?op=insert',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
          switch (datos) {
            case '1':
              toastr.success(
                'Registro Exitoso'
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
 
   