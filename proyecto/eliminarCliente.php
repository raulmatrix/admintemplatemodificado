
<?php
    include "basedatos/conexionbd.php";
    conectarbd();

    //recepcionar el dato o el ID
    $idCliente = $_GET['idCli'];


?>

<div class="modal-body">
        Esta seguro de eliminar este registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="ejecutarEliminar(<?php echo $idCliente;?>)">Eliminar</button>
</div>