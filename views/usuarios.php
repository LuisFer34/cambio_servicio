<?php require ("../estructura/header.php");?>
<?php require ("../estructura/sidebar.php");?>

<div class="p-3">
    <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-center">                 
            <p>Administracion de Usuarios </p>
        </div>             
            <div class="card mb-2">
        <div class="row">
            <div class="form-group m-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agUsuario">
            AGREGAR USUARIO</button>
            </div>
        </div>
        <div class="m-3">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <td class="text-center">Id</td>
                        <td class="text-center">Nombre</td>                
                        <td class="text-center">Telefono</td>
                        <td class="text-center">Ingreso</td>                            
                        <td class="text-center">Status</td>
                        <td class="text-center">Acciones</td>
                    </tr>
                </thead>
                <tbody id="registros"></tbody>
            </table>
</div>
            </div>
        </div>
    </div>
</div>

<?php include ("modal/modal_agUsuario.php");?>
<script src="../js/jquery-3.7.1.min.js"></script>
<script src="../controller/funciones_ajax.js"></script>

<?php require ("../estructura/footer.php");?>