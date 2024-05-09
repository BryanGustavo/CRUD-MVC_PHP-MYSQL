<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d06e0fabbb.js" crossorigin="anonymous"></script>
    <script src="eliminar.js"></script>
</head>

<body>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_evento.php"; 
    ?>
    <h3 class="text-center p-2">Listado de eventos</h3>
    <div class="col-8-auto p-2">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">FECHA DE INCIO</th>
                    <th scope="col">FECHA DE FIN</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql = $conexion->query("SELECT * FROM eventos");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->id_evento ?></td>
                        <td><?= $datos->titulo ?></td>
                        <td><?= $datos->descripcion ?></td>
                        <td><?= $datos->fecha_inicio ?></td>
                        <td><?= $datos->fecha_fin ?></td>
                        <td>
                            <a href="vistas/registrar.php" class="btn btn-small btn-success"><i class="fa-solid fa-plus"></i></a>
                            <a href="vistas/modificar.php?id=<?= $datos->id_evento ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_evento ?>" class=" btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</body>