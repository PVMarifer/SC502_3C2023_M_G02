
$(document).ready(function () {
  $('#calendario').fullCalendar({
    initialView: 'dayGridMonth',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month'
    },
    events:'../../controller/partos/partoController.php?op=obtener_partos',
    editable: false, 
    eventRender: function (event, element) {
        element.css('background-color', '#52AA5E'); 

    }
  
  });

});
function obtener() {
  $.ajax({
    url: '../../controller/partos/partoController.php?op=obtener_partos',
    type: "GET",
    dataType: "json",
    success: function (data) {

      console.log(data)
    },
    error: function (xhr, status, error) {
      console.error(error);
    }
  });
}
obtener()

/*Funcion para cargar el listado en el Datatable*/
function listarPartos() {
  tabla = $('#tablalistado').dataTable({
    aProcessing: true, //actiavmos el procesamiento de datatables
    aServerSide: true, //paginacion y filtrado del lado del serevr ../controller/animalController.php?op=listar_tabla'
    dom: 'Bfrtip', //definimos los elementos del control de tabla
    buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdf'],
    ajax: {
      url: '../../controller/animales/animalController.php?op=listar_tabla',
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

$(function(){

  listarPartos();
});