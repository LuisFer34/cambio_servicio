<?php 
require_once ("../estructura/header.php");
require ("../estructura/sidebar.php");
?>
<?php require ("../model/mostrar_servicios.php")?>

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
<div class = "row m-3">
        <div class="card w-6 0 h-100 mt-2 shadow p-2 mb-5 bg-white rounded data-spy="scroll">          
          <div class="card-body">
        
          </div>
          <?php foreach($resultado as $soli){?>
            <div class="card shadow-sm p-2 mb-2 bg-white rounded">              
              <div class="card-body">                
                <div class="row">
                  <div class="col-20">
                    <strong>Cliente:</strong> <?= $soli['Nombre_Cliente']?>
                    <br>
                    <strong>Agente:</strong> <?= $soli['Problema_Prresentado']?>
                    <br>
                    <strong>Detalles:</strong> 
                    <br>
                    <?= $soli['Problema_Prresentado']?>
                  </div>
                  <div class="col d-flex justify-content-center align-items-center">                    
                    <button type="button" name="" id="" class="btn btn-success p-3">ASIGNAR TECNICO()</button>
                  </div>
                </div>                              
              </div>
            </div>
          <?php }?>
        </div>
      </div>

        </div>         
    </div>
  </div>
</nav>
    
</body>
</html>

<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../controller/funciones_ajax.js"></script>

<?php require ("../estructura/footer.php");?>