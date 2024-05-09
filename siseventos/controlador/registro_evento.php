<?php 

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["titulo"]) and !empty($_POST["descripcion"]) and !empty($_POST["fecha_inicio"]) and !empty($_POST["fecha_fin"])){
      
      $titulo=$_POST["titulo"];
      $descripcion=$_POST["descripcion"];
      $fecha_inicio=$_POST["fecha_inicio"];
      $fecha_fin=$_POST["fecha_fin"];

      $sql=$conexion->query("INSERT INTO eventos(titulo,descripcion,fecha_inicio,fecha_fin )VALUES('$titulo','$descripcion','$fecha_inicio','$fecha_fin')");
      if ($sql=1) {
         header("location:../index.php");
      }else{
         echo '<div class="alert alert-danger">Error al registrar evento</div>';
      }

   }else{
    echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
   }
}   

?>