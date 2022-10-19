<?php
    $nombreservidor = "localhost";
    $usuariobd = "root";
    $passw = "";
    $dbnombre = "bdtaller";

    /*$respuestaconsulta;
    $conex;
    $resultado;
*/
    function conectarservidor(){
    global $nombreservidor,$usuariobd,$passw,$dbnombre;
    $conex = mysqli_connect($nombreservidor,$usuariobd,$passw,$dbnombre);

        if(!$conex){
            echo "Error en la conexion". mysqli_connect_error();
        }
        else{
            echo "Conexion Exitosa";
        }
    }
    /*
    function conectarbd(){
        global $conex, $dbnombre,$db;
        $db = mysqli_select_db($conex,$dbnombre);
    }*/

    function consulta($sql){
       global $conex,$resultado;
     
       $resultado = mysqli_query($conex,$sql); 
       if ($resultado) {
            echo "Consulta exitosa";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conex);
        }
    }

    
    function numfilas(){
        global $resultado;
        return mysqli_num_rows($resultado);
    }
    


?>