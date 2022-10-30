<?php
    include "basedatos/conexionbd.php";
    conectarbd();

    //recepcionando los datos para actualizar

    $idCliente = $_GET['idCli'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $carnet = $_GET['carnet'];
    $fijo = $_GET['fijo'];
    $celular = $_GET['celular'];

    //actualizar
    $sqlactualizar = "UPDATE cliente SET nombreCli='$nombre', apellidoCli='$apellido',
    carnet='$carnet',fonoFijo='$fijo',fonoCel='$celular' WHERE idCliente='$idCliente'";
    $ejecutarActualizacion = mysqli_query($conex, $sqlactualizar);

    //mostrar los datos actualizados
    //recuperar los datos para mostrarlos en la lista
    
$sqllista1 = "SELECT idCliente,nombreCli,apellidoCli,carnet,fonoFijo,fonoCel
FROM cliente";
$consultaCli1 = mysqli_query($conex,$sqllista1);



?>


<div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Carnet</th>
                              <th>Telefono Fijo</th>
                              <th>Telefono Celular</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //codigo PHP para generar datos de la tabla
                            while($filaAct = mysqli_fetch_assoc($consultaCli1)){
                              echo "<tr>";
                                $idCliente = $filaAct['idCliente'];
                                echo "<td>".$filaAct['nombreCli']."</td>";
                                echo "<td>".$filaAct['apellidoCli']."</td>";
                                echo "<td>".$filaAct['carnet']."</td>";
                                echo "<td>".$filaAct['fonoFijo']."</td>";
                                echo "<td>".$filaAct['fonoCel']."</td>";
                              ?>  
                              <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-warning" data-toggle='modal' data-target='#actualizar'  onClick='actualizarCliente(<?php echo $idCliente;?>);'><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger" data-toggle='modal' data-target='#delete'><i class="fas fa-trash"></i></a>
                                </div>
                              </td>
                            </tr>
                            <?php
                              }

                            ?>
                            
                            </tbody>
                            <tfoot>
                            <tr>
                            <th>Nombres</th>
                              <th>Apellidos</th>
                              <th>Carnet</th>
                              <th>Telefono Fijo</th>
                              <th>Telefono Celular</th>
                            </tr>
                            </tfoot>
                          </table>
                        </div>