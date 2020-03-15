<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!-- estilos -->
        <link rel="stylesheet" href="estilos/principal.css" />
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- librerias -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="librerias/fontawesome/js/all.min.js"></script>
        <script src="librerias/funciones.js"></script>


    </head>
    <body>
        <div class="alert alert-danger mensaje-error" role="alert">
            <p class="text-center">El usuario ya se encuentra entre nosotros.</p>
        </div>

        <i class="fas fa-anchor"></i>
        <h2>sendme!</h2>

        <div id="poner-usuario">
            <input id="usuario" type="text" onkeyup="estaUsuario(this.value);" placeholder="Dime tú alias marinero..." />   
            <span class="usuario-correcto"><i class="fas fa-check"></i></span>
            <button onclick="ocultarYMostrar();" type="button" class="ancho-boton btn btn-dark">Adelante marinero!</button>
        </div>

        <div id="contenedor">
            <div id="dragandrophandler">
                <i class="far fa-file"></i>
                <span class="titulo-fichero">Arrastra y suelta el fichero marinero!</span>
            </div>

            <!--<div id="chat"></div>
            <input id="name" type="text" placeholder="name" />
            <input id="message" type="text" placeholder="message" />
            <button id="send">Send</button>-->

            <input id="usuario" type="text" placeholder="Busquemos a ese usuario..." />
        </div>

        <script src="librerias/dragAndDrop.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>
