// function showTableGP() {


//     tableDocGP = $('#tabla_datos_usu').DataTable({
//         orderCellsTop: true,
//         bAutoWidth: false,
//         destroy: true,
//         language: {
//             "sProcessing": "Procesando...",
//             "sLengthMenu": "Mostrar registros: _MENU_",
//             "sZeroRecords": "No se encontraron resultados",
//             "sEmptyTable": "Ningún dato disponible en esta tabla",
//             "sInfo": "",
//             "sInfoEmpty": "",
//             "sInfoFiltered": "",
//             "sInfoPostFix": "",
//             "sSearch": "Buscar:",
//             "sUrl": "",
//             "sInfoThousands": ",",
//             "sLoadingRecords": "Cargando...",
//             "oPaginate": {
//                 "sFirst": "<<",
//                 "sLast": ">>",
//                 "sNext": ">",
//                 "sPrevious": "<"
//             },
//             "oAria": {
//                 "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
//                 "sSortDescending": ": Activar para ordenar la columna de manera descendente"
//             },
//             "buttons": {
//                 "copy": "Copiar",
//                 "colvis": "Visibilidad"
//             }
//         },
//         "ajax": {
//             url: "../data/getDataDocGP.php"
//         },
//         "columns": [
//             {
//                 "data": "id"
//             },
//             {
//                 "data": "direccion"
//             },
//             {
//                 "data": "op_control"
//             },
//             {
//                 "data": "no_oficio"
//             },
//             {
//                 "data": "fecha_oficio"
//             },
//             {
//                 "data": "fecha_recepcion"
//             }
//         ]


//     });

// }



// $(document).ready(()=>{
//     showTableGP();
// });


function showTableGP() {
    tableDocGP = $('#tabla_datos_usu').DataTable({
        orderCellsTop: true,
        autoWidth: false, // En lugar de bAutoWidth
        destroy: true,
        language: {
            processing: "Procesando...",
            lengthMenu: "Mostrar _MENU_ registros",
            zeroRecords: "No se encontraron resultados",
            emptyTable: "Ningún dato disponible en esta tabla",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "Mostrando 0 a 0 de 0 registros",
            infoFiltered: "(filtrado de _MAX_ registros totales)",
            infoPostFix: "",
            search: "Buscar:",
            url: "",
            infoThousands: ",",
            loadingRecords: "Cargando...",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            },
            aria: {
                sortAscending: ": Activar para ordenar la columna de manera ascendente",
                sortDescending: ": Activar para ordenar la columna de manera descendente"
            },
            buttons: {
                copy: "Copiar",
                colvis: "Visibilidad"
            }
        },
        ajax: {
            url: '../data/getDataDocGP.php'
        },
        columns: [
            { data: "id_docreg" },
            { data: "direccion" },
            { data: "op_control" },
            { data: "no_oficio" },
            { data: "fecha_oficio" },
            { data: "fecha_recepcion" }
        ]
    });
}

$(document).ready(() => {
    showTableGP();
});
