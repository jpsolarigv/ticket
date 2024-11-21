$(document).ready(function () {
    $("#login").submit(function (e) {
      
        e.preventDefault(); // Evitar el envío normal del formulario
        var datosFormulario = $(this).serialize(); // Serializa los datos del formulario
  
        $.ajax(
            {
                url: '../../controladores/LoginControlador.php', // Controlador PHP
                type: 'POST',
                data: datosFormulario,
                dataType: 'json', // Esperamos una respuesta en JSON
                success: function (response) {
                    if (response.exito) {
                        $("#resultado").html("<div class='alert alert-success' role='alert'>" + response.mensaje + "</div>");
                        if (response.redirect) {
                            window.location.href = response.redirect;  // Realiza la redirección
                        }
                        console.log(e.response);
                    }
                    else {
                        $("#resultado").html("<div class='alert alert-danger' role='alert'>" + response.errores.join("<br>") + "</div>");
                        console.log(e.response);
                    }
                },

                /*
                if (Boolean(response.result)===true){
                    window.location.href = baseURL+"lista/"+response.ide;
                 }else{ 
                    $('.errores').text(response.mensaje); 
                 }
                */    

                //error: function(e){
                  //  console.log(e.responseText);	
                //}

                error: function (e) {
                  $("#resultado").html("<div class='alert alert-danger' role='alert'>Hay un error:" + e.responseText + "</div>");
                }
            });
    });
});
