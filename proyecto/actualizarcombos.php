<?php

$marca = $_GET['marca'];
//echo "ffffffffffffff".$marca;
if($marca=='toyota'){
?>



<div class="form-group">
    <label for="marca">Modelo:</label>
                              
    <select class="form-control" name="marca" id="marca">
    <option value="">-Elegir Modelo-</option>
    <option value="">Hilux</option>
    <option value="">Hiace</option>
    <option value="">Corolla</option>
    <option value="">Starlet</option>
                                
    </select>
</div>



<?php


}

else 
    if($marca=='mazda'){
    echo "solo es mazda";
}



?>
