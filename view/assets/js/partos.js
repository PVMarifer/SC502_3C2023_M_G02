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
  $('#form-modificar').hide();
  listarPartos();
});