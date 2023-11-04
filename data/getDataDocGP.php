<?php
    require('conexion.php');


$sql = $conn->prepare("SELECT da.id_docreg, da.direccion, da.op_control, da.no_oficio, da.fecha_oficio, da.fecha_recepcion FROM docreg_particular as da");
$sql->execute();
$datos = $sql->fetchAll(PDO::FETCH_ASSOC);


echo json_encode(array('data' => $datos));


// $response = array();
// foreach ($datos as $get) {
//     $row = array(
//         'id_documento' => $get['id'],
//         'direccion' => $get['direccion'],
//         'op_control' => $get['op_control'],
//         'no_oficio' => $get['no_oficio'],
//         'fecha_oficio' => $get['fecha_oficio'],
//         'fecha_recepcion' => $get['fecha_recepcion']
//     );

//     $response[] = $row;
// }


//  echo json_encode(array('data' => $response));
?>


