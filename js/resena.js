$(document).ready(function() {
  $('#txt-content').Editor();

  $('#btn-enviar').click(function(e){
    e.preventDefault();
  //   // var texto = $('#txt-content').Editor('getText');
  //   // $('#texto').html(texto);
    $('#txt-content').text($('#txt-content').Editor('getText'));
    $('#frm-test').submit();
  });
});
