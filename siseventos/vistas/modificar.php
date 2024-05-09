<?php

include "../modelo/conexion.php";

$id = $_GET["id"];

$sql = $conexion->query("SELECT * FROM eventos WHERE id_evento=$id ");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form class="p-3" method="POST">
        <h3 class="text-center text-secondary">Modificar eventos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "../controlador/modificar_evento.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" value="<?= $datos->titulo ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" name="fecha_inicio" value="<?= $datos->fecha_inicio ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" name="fecha_fin" value="<?= $datos->fecha_fin ?>">
            </div>
        <?php }
        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar evento</button>
    </form>
</body>

</html>