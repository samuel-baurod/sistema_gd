<?php
    $host = 'localhost'; // Nombre del servidor
    $dbname = 'sgd_bd'; // Nombre de la base de datos
    $username = 'root'; // Nombre de usuario
    $password = ''; // Contraseña de usuario

    // Intentamos conectarnos a la base de datos usando PDO
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // echo "Conexion exitosa";

    } catch(PDOException $e) {
        echo "Error al conectar a la base de datos: " . $e->getMessage();

    }
?>
