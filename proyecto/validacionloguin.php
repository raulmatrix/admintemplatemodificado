<?php

include 'basedatos/conexionbd.php';
//conectar con consulta base de datos la sgte clase

    //conectarbd();
    conectarbd();
    $usuario=$_GET['usuario'];
    $password=$_GET['passw'];
    //revisar los datos de la BD
    $consul="select usuario, password 
    from usuario 
    where usuario='$usuario' and password='$password'";
    //consulta
    $resultado = mysqli_query($conex,$consul); 
    $filas = mysqli_num_rows($resultado);
    
    if($filas>0){

?>   
        <script>
        window.location.href = "http://localhost:9095/tallertuercas/principal.html";
        </script>

        <?php
    }else{
        ?>

        <div class="alert alert-warning" role="alert">
        El usuario y/o la contraseña que ingreso es incorrecta, favor de revisar.
        </div>

       
            
    <?php
    }   
?>