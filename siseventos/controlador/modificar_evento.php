<?php 

if (!empty($_POST["btnregistrar"])){
    if(!empty($_POST["titulo"]) and !empty($_POST["descripcion"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_fin"])){

        $id = $_POST["id"];    
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_fin = $_POST["fecha_fin"];

        $sql=$conexion->query("UPDATE eventos SET titulo='$titulo', descripcion='$descripcion', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin'  WHERE id_evento=$id ");
        if($sql=TRUE){
            header("location:../index.php");
        }else{
            echo '<div class="alert alert-danger">Error al modificar el evento</div>';
        }

    }else{
        echo '<div class="alert alert-warning">campos vacios</div>';
    }
}

?>