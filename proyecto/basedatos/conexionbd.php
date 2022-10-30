<?php
/*datos para enlazar con mysql bd*/
    $servidor = "localhost";
    $usuariobd = "root";
    $password = "";
    $db = "bdtaller";

    $conex = mysqli_connect($servidor,$usuariobd,$password,$db);
function conectarbd(){
    $servidor = "localhost";
    $usuariobd = "root";
    $password = "";
    $db = "covidbd";

    $conex = mysqli_connect($servidor,$usuariobd,$password,$db);

    if(!$conex){
        die("Conexion fallida ".mysqli_connect_error());
    }
}

?>