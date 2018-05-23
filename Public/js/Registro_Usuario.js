jQuery(document).on('submit','#Form_Registrar',function(event){
  event.preventDefault();
  var parametros = {
    "tipo_documento" : $('input:text[name=tipo_documento]').val(),
    "n_documento" : $('input:text[name=n_documento]').val()
  };
  alert(parametros);
  jQuery.ajax({
    url:'Model/Datos_Registrar.php',
    type:'POST',
    dataType:'json',
    data:$(this).serialize(),
    /*beforeSend:function(){

    }*/
  });
});