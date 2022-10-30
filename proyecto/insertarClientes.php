<?php

    include 'basedatos/conexionbd.php';
  //conectarbd();
    conectarbd();
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $carnet = $_GET['carnet'];
    $fonofijo = $_GET['fonofijo'];
    $fonocelular = $_GET['celular'];

    $consultasql = "INSERT INTO cliente (idCliente, nombreCli, apellidoCli, carnet, fonoFijo, fonoCel) 
    VALUES (NULL, '{$nombre}', '{$apellido}', {$carnet}, {$fonofijo}, {$fonocelular})";

    if(mysqli_query($conex,$consultasql)){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <strong>Registro Exitoso</strong> insertado correctamente
              </div>
              
              <script>
                $(".alert").alert();
              </script>
    <?php
    }else{
        echo "Error".$consultasql." ". mysqli_error($conex); 
    }
?>