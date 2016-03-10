(function(){
  $("#validacion").click(function(){
    
        var nombre = $(".nombre").val();
            rif = $(".rif").val();
            email = $(".email").val();
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            direccion = $(".direccion").val();
            telefono = $(".telefono").val();
            paginaweb = $(".paginaweb").val();
 
        if (nombre == "") {
            $(".nombre").focus();
            return false;
        }else if(rif == ""){
            $(".rif").focus();
            return false;
        }else if(email == "" || !validacion_email.test(email)){
            $(".email").focus();    
            return false;
        }else{
            //$('.ajaxgif').removeClass('hide');
            var datos = 'nombre='+ nombre + '&rif=' + rif + '&email=' + email + '&direccion' + direccion + '&telefono' + telefono + '&paginaweb' + paginaweb;
            $.ajax({
                type: "POST",
                url: "from-afiliacion.php",
                data: datos,
                /*success: function() {
                    //$('.ajaxgif').hide();
                    $('.msg').text('Mensaje enviado!').addClass('msg_ok').animate({ 'right' : '130px' }, 300);  
                },
                error: function() {
                    //$('.ajaxgif').hide();
                    $('.msg').text('Hubo un error!').addClass('msg_error').animate({ 'right' : '130px' }, 300);                 
                }*/
            });
            return false;
        }
  });
})();