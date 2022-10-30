function insertarCliente(){

    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var carnet = $('#carnet').val();
    var fonofijo = $('#fonofijo').val();
    var celular = $('#fonocelular').val();

    $.get("insertarClientes.php",{nombre:nombre,apellido:apellido
        ,carnet:carnet,fonofijo:fonofijo,celular:celular},function(result){
            $("#respuestainsert").html(result);
            $("#respuestainsert").show();
    });
}

function actualizarCliente(idCliente){
    let idCli = idCliente;

    $.get("actualizarCliente.php",{idCli:idCli},function(result){
        $("#contenidoActualizar").html(result);
        $("#contenidoActualizar").show();
    });

}

function ejecutarActualizacion(idCliente){
    let idCli = idCliente;
    let nombre = $('#nombre').val();
    let apellido = $('#apellido').val();
    let carnet = $('#carnet').val();
    let fijo = $('#fonofijo').val();
    let celular = $('#fonocelular').val();

    $.get("ejecutarActualizacion.php",{idCli:idCli,nombre:nombre,apellido:apellido,carnet:carnet,fijo:fijo,celular:celular},function(result){
        $("#actualizarTabla").html(result);
        $("#actualizarTabla").show();
    });
}

function eliminarCliente(idCliente){
    let idCli = idCliente;

    $.get("eliminarCliente.php",{idCli:idCli},function(result){
        $("#contenidoActualizarEliminar").html(result);
        $("#contenidoActualizarEliminar").show();
    });

}

function ejecutarEliminar(idCliente){
    let idCli = idCliente;
    $.get("ejecutarEliminarCliente.php",{idCli:idCli},function(result){
        $("#actualizarTabla").html(result);
        $("#actualizarTabla").show();
    });
}
