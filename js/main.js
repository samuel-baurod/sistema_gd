$(document).ready(()=>{

    



});



// Codigo que me mando Gabriel

// $("#doc_dir").on('click', 'tr', function(e) {
//         //alert('Hola mundo');
//         console.log($(this).children());
//         e.preventDefault();
//         if($(this).children() == $(this).children("th"))
//         {
//             console.log($(this).children());
//             swal('error');
//         }else{
//             var campo1;
//             $(this).children("td").each(function(i) {
//                 switch (i) {
//                     case 0:
//                         campo1 = $(this).text();
//                         break;
//                 }
//                 $(this).css("background-color", "#ECF8E0");
//             })

//             //Se imprime el ID adquirido en la parte anterior
//             var textoRenglon = campo1;
//             console.log(textoRenglon);
//             var id = textoRenglon;
//             if(id)
//             {
//             var data = id;
//             localStorage.setItem("id_doc", data);
//             console.log("Este es el id" + data);
//             if (localStorage.getItem("window") == 2){
//                 resizeIfreameD();
//             }
//             var textoBusqueda = data;
//             console.log("es: " + textoBusqueda);
//             $(document).empty();
//             $("#resultadoBusqueda").html("<img id='loading_document' src='../img/loading_p2.gif'>");
//             setTimeout(function() {

//                 $.ajax(
//                     {
//                         type:   'POST',
//                         url:    '',
//                     }
//                 )

//                 $.ajax({
//                     type: 'POST',
//                     url: '../View/vista_doc_dir.php',
//                     data: { 'id-document': textoBusqueda },
//                     success: function(e) {
//                         $('#Modal-doc').modal('show');
//                         $("#data").html(e);    
//                     },
//                 });
//             }, 0);
//             }
//                         //alert(id); 
//         }
       

//     });