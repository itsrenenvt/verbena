$(document).ready(function() {
  $('#txt-content').Editor();

  $('#btn-modificar').click(function(e){
    // e.preventDefault();
    // $('#txt-content').text($('#txt-content').Editor('getText'));
    // $('#frm-test').submit();
    $('#txt-content').Editor('setText', ['<p>hola</p>']);
  });

  $('#btn-enviar').click(function(e){
    e.preventDefault();
    $('#txt-content').text($('#txt-content').Editor('getText'));
    $('#frm-test').submit();
  });
});
