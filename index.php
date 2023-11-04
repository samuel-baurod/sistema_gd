<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzón de entrada - SGD</title>

    <!-- Icono en la pestaña del navegador -->
    <link rel="shortcut icon" href="/img/icono_sgirpc.ico" />
    
    <!-- Importación del tipo de fuente: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Importación de las hojas de estilos -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Importación de bootstrap 5 -->
    <link rel="stylesheet" href="/css/bst/bootstrap.min.css">

    <!-- Importación de iconos bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- CSS del font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Importacion de los estilos del datatable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


  <!-- SCRIPTS -->

  <!-- Scripts de las librerias -->

  <!-- Script del jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      
  <!-- Script del bootstrap v5 -->
  <script src="/js/bst/bootstrap.bundle.min.js"></script>
      
  <!-- Script del datatable.js -->
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  <!-- Script del fiveserver -->
  <script data-id="five-server" src="http://localhost:5500/fiveserver.js"></script>

  <!-- Scripts de los archivos de javascript -->

  <!-- Script principal -->
  <script src="/js/main.js"></script>

  <!-- Manejador de eventos de la tabla (Archivo table_event) -->
  <!-- <script src="/js/table_event.js"></script> -->

</head>

<body id="contenidototal">

    <header>
        <div id="navbar">
            <img src="/img/logotipo_sgirpc.png" id="img-navbar" alt="Imagen SGIRPC" width="380px" height="60px">
            <!-- <img src="/img/img-navbar-sm.png" id="img-navbar-rsp" alt="Imagen pequeña SGIRPC" width="100px" height="35px"> -->
        </div>
    </header>

    <main>
    <!-- <div id="container">  -->
        <section id="lateral-bar">
          <?php include('view/lateral-bar.php'); ?>
        </section>

        <!-- Seccion principal que contiene el área en blanco donde esta la tabla y el pdf -->
        <section id="main-content">fdsfsdfsfds</section>

      <!-- </div> -->
    </main>

    



  </body>
</html>