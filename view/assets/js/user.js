$('#formulario-registro').on('submit', function (event) {
  event.preventDefault();
  $('#btnRegistar').prop('disabled', true);
  console.log('dsdgdfg')
  var formData = new FormData($('#formulario-registro')[0]);
  $.ajax({
    url: 'controller/user/userController.php?op=insert',
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
          bootbox.alert({
              message: 'Registro exitoso',
              size: 'small'
              });
          setTimeout(function() {
              
              window.location.href = 'login.php'
          }, 2000);
          
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
          //toastr.error(datos);
          break;
      }
      $('#btnRegistar').removeAttr('disabled');
    },
  });
});