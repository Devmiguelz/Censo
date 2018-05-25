jQuery(document).on('submit','#Form_Restablecer',function(event){
  event.preventDefault();
  jQuery.ajax({
    url:'../Model/Enviar_Email.php',
    type:'POST',
    dataType:'json',
    data:$(this).serialize(),
    beforeSend:function(){
      $('.restar').html('VALIDANDO. . .');
    }
  })
  .done(function(datos){
    if (datos.error == false) {
      if (datos.envio == true) {
        $('.enviado').fadeIn("slow");
        setTimeout(function(){
          location = '../index.php';
        },7000);
        
      }
      if (datos.envio == false){
        $('.error-enviar').slideDown('slow');
        $('.restar').html('Restablecer contraseña');
        $(".input").val("");
        setTimeout(function(){
          $('.error-enviar').slideUp('slow');
        },3000);
      }
    }
    if (datos.error == true) {
      $('.error').slideDown('slow');
      $('.restar').html('Restablecer contraseña');
      $(".input").val("");
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