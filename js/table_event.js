$(document).ready(function(){
    $("#tabla_datos_usu").on('click', 'tr', function(e) {
        e.preventDefault();
        
        var campo1;
        
        if ($(this).children("th").length > 0) {
            // Manejar el caso cuando se hace clic en una fila de encabezado (th).
            console.log("Es un encabezado");
        } else {
            // Manejar el caso cuando se hace clic en una fila de datos (td).
            campo1 = $(this).children("td:eq(0)").text();
            console.log(campo1);
        }
    });
});



// //Se imprime el ID adquirido en la parte anterior
// var textoRenglon = campo1;
// console.log(textoRenglon);

// var id = textoRenglon;
// if(id)
// {
// var data = id;
// localStorage.setItem("id_doc", data);
// console.log("Este es el id" + data);
// if (localStorage.getItem("window") == 2){
//     resizeIfreameD();
// }
// var textoBusqueda = data;

// $(document).empty();
// $("#resultadoBusqueda").html("<img id='loading_document' src='../img/loading_p2.gif'>");
// setTimeout(function() {

//     $.ajax(
//         {
//             type:   'POST',
//             url:    '',
//         }
//     )

//     $.ajax({
//         type: 'POST',
//         url: '../View/vista_doc_dir.php',
//         data: { 'id-document': textoBusqueda },
//         success: function(e) {
//             $('#Modal-doc').modal('show');
//             $("#data").html(e);    
//         },
//     });
// }, 0);
// }
