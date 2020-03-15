
/**
 * Comprueba que el usuario esta en la base de datos, mostrando ciertos mensajes.
 **/
function estaUsuario(usuario) {
    $.ajax({
        method: "POST",
        url: "php/comprobarUsuario.php",
        data: {usuario: usuario}
    })
            .done(function (resultado) {

                var mensajeError = $(".mensaje-error");
                var mensajeExito = $(".usuario-correcto");

                //borramos la propiedad style, para indicar que no hay mensaje 
                //cuando esta la cadena vacia.
                mensajeError.removeAttr("style");
                mensajeExito.removeAttr("style");

                //ponemos margen al 2%.
                $(".ancho-boton").css("margin-top", "2%");

                if (usuario != "") {

                    mensajeError.attr("style", "display: none ! important;");
                    mensajeExito.attr("style", "display: block ! important;");

                    //quitamos el margen del boton
                    $(".ancho-boton").css("margin-top", "0%");

                    if (resultado == 1) {
                        mensajeError.attr("style", "display: block ! important;");
                        mensajeExito.attr("style", "display: none ! important;");

                        //ponemos margen al 2%.
                        $(".ancho-boton").css("margin-top", "2%");
                    }
                }

            });
}


/**
 * Al darle al boton, este muestra el formulario y oculta el tema del nickname.
 */
function ocultarYMostrar(){

    //alamcenamos en variables los dos elementos a mostrar/ocultar.
    var formulario = $("#poner-usuario");
    var usuario = $("#contenedor");

    //ocultamos y mostramos.
    formulario.attr("style","display: none !important");
    usuario.attr("style","display: block !important");
   
}

/**
 * 
 */
function insertarUsuario(usuario){
    
        $.ajax({
        method: "POST",
        url: "php/insertarUsuario.php",
        data: {usuario: usuario}
    })
            .done(function (resultado) {});
    
}