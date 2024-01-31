<?php require_once ("../estructura/header.php");?>
<?php require ("../estructura/sidebar.php");?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Agenda</title>
</head>
<body>
    <!-- ================================== -->
  <!-- ENCABEZADO -->
  <!-- ================================== -->
  <header class="container-fluid bg-dark d-flex justify-content-center">
    <p class="text-light mb-0 p-2 fs-5"> Control de Servicios</p>
  </header>
  <div class="p-3">
    <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-center">                 
<!---Agenda-->
<div class = "row m-2">
        <div class="card w-6 0 h-110 mt-2 shadow p-2 mb-5 bg-white rounded data-spy="scroll">          
          <div class="card-body">
          <table class="table">
      <caption class="Serv"></caption>
      <thead>
          <tr>
              <th class="text-center">Nombre del cliente</th>
              <th class="text-center">Direccion</th>
              <th class="text-center">Tipo de servicio</th>
              <th class="text-center">Problema presentado</th>
              <th class="text-center">Agente</th>
          </tr>
      </thead>
      <tbody id="serv"></tbody>
  </table>
        </div>         
    </div>
  </div>
</nav>
    
</body>
</html>

<?php include ("modal/modal_asgTecnico.php");?>

<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../controller/funciones_ajax.js"></script>

<?php require ("../estructura/footer.php");?>