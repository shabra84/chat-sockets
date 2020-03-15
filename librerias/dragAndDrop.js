$(document).ready(function () {

    var obj = $("html");


    obj.on('dragenter', function (e)
    {
        e.stopPropagation();
        e.preventDefault();

    });
    obj.on('dragover', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });
    obj.on('drop', function (e)
    {
        e.preventDefault();
        e.stopPropagation();

        var files = e.originalEvent.dataTransfer.files;

        //ponemos el mensaje en blanco.
        $(".titulo-fichero").html("");

        //le pongo un titulo al fichero y pongo el iconito.
        $("#dragandrophandler span").html("<b>" + files[0].name + "</b>");
        $(".svg-inline--fa.fa-file.fa-w-12").attr("style", "display:block !important");
        
        //ponemos margen al titulo del fichero.
        $(".titulo-fichero").attr("style","margin-top:3% !important;");

    });
    obj.on('drag', function (e)
    {
        e.preventDefault();
        e.stopPropagation();

    });
});

