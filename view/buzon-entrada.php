

<link rel="stylesheet" href="styles.css">
<script src="../js/buzon-entrada.js"></script>


<div id="area-left">

<div id="header-table">
    <h5 id="titulo_buzonentrada">Buzón de Entrada</h5>
</div>


<!-- Grupo de botones de Generados y Asignados -->

<div>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Documentos registrados particular</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Documentos registrados para areas</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="content-table-data"> 


        <table id="tabla_datos_usu" class="table table-primary table-striped table-hover table-responsive nowrap" style="width:100%">
            <thead>
                <tr id="enc_tabla">
                    <th>ID</th>
                    <th>Dirección</th>
                    <th>Op. Control</th>
                    <th>No. Oficio</th>
                    <th>Fecha Oficio</th>
                    <th>Fecha Recepción</th>
                </tr>
            </thead>
            <tbody id="table_data">

            </tbody>
        </table>

      </div>
    </div>
    
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">dsadsa</div>
    
  </div>
</div>


<div id="area-right">

<div id="pdf-area">
    <h5 id="titulo_predocumento">Previsualización del documento</h5>
    <div id="visual-pdf">
    <!-- Visualizacion del pdf de la impresora en el iframe -->
    <!-- <iframe src="https://www.dimacofi.cl/wp-content/uploads/2021/01/Kyocera-Ecosys-M2040dn.pdf" style="width:600px; height:700px;" frameborder="0"></iframe> -->

      <div id="pv_logobn">
        <img src="/img/logo_sgirpc_bn.png" alt="" width="600em" height="auto">
      </div>

    </div>


</div>

<div id="menu-pdf-area">

  <div id="subnav-pdf-generados">

    <div class="option-subnav">
        <i class="bi bi-file-text-fill"></i>
        <p>Asignar instrucciones</p>
    </div>
    <div class="option-subnav">
        <i class="bi bi-pencil-fill"></i>
        <p>Editar datos del documento</p>
    </div>
    <div class="option-subnav">
        <i class="bi bi-paperclip"></i>
        <p>Editar archivos adjuntos</p>
    </div>  

  </div>

  <div id="subnav-pdf-asignados">

    <div class="option-subnav">
        <i class="bi bi-pencil-square"></i>
        <p>Editar Turno</p>
    </div>
    <div class="option-subnav">
        <i class="bi bi-file-earmark-pdf-fill"></i>
        <p>Generar volante</p>
    </div>
    <div class="option-subnav">
        <i class="bi bi-send-fill"></i>
        <p>Agregar respuesta</p>
    </div>
    <div class="option-subnav">
        <i class="bi bi-file-earmark-x-fill"></i>
        <p>Cancelar documento</p>
    </div>
    <div class="option-subnav">
        <i class="bi bi-clock-history"></i>
        <p>Historial</p>
    </div>
    <div class="option-subnav">
        <i class="bi bi-chat-left-text-fill"></i>
        <p>Ver respuesta</p>
      </div>
      <div class="option-subnav">
        <i class="bi bi-arrow-repeat"></i>
        <p>Volver a turnar</p>
      </div>
      <div class="option-subnav">
        <i class="bi bi-file-text-fill"></i>
        <p>Generar BIS</p>
      </div>

  </div>

    

</div>

</div>




</div>