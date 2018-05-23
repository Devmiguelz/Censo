jQuery(document).on('submit','#Form_Login',function(event){
  event.preventDefault();
  jQuery.ajax({
    url:'View/validar.php',
    type:'POST',
    dataType:'json',
    data:$(this).serialize(),
    beforeSend:function(){
      $('.log').html('VALIDANDO. . .');
      $('.cargar').show('fast');
    }
  })
  .done(function(datos){
  if (datos.error == false) {
      if (datos.tipo == 0) {
        location = 'View/home.php';
      }else if (datos.tipo == 1) {
        location = 'View/admin.php';
      }
    }else {
      $('.error').slideDown('slow');
      $('.log').html('LOGIN');
      $('.cargar').hide(200);
      setTimeout(function(){
        $('.error').slideUp('slow');
      },3000);
    }
  })
  .fail(function(resp){
    console.log(resp.responseText);
  })
  .always(function(){
    console.log("complete");
  });
});