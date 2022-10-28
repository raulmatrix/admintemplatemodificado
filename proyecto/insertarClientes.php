<?php

    include 'basedatos/conexionbd.php';
  //conectarbd();
  conectarservidor();
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $carnet = $_GET['carnet'];
    $fonofijo = $_GET['fonofijo'];
    $fonocelular = $_GET['fonocelular'];

    
    //conexion
    $conex = mysqli_connect($nombreservidor,$usuariobd,$passw,$dbnombre);

    $consultasql = "INSERT INTO cliente (idCliente, nombreCli, apellidoCli, carnet, fonoFijo, fonoCel) 
    VALUES (NULL, '{$nombre}', '{$apellido}', {$carnet}, {$fonofijo}, {$fonocelular})";

    if(mysqli_query($conex,$consultasql)){
        echo "Insercion de cliente, correcta";
    }else{
        echo "Error".$consultasql." ". mysqli_error($conex); 
    }


    

?>