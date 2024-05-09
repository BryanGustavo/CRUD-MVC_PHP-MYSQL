<?php 

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM eventos WHERE id_evento=$id");
    if($sql==1){
        echo '<div class="alert alert-success">Evento eliminado correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar el evento</div>';
    }
}

?>