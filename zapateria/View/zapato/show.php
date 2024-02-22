<?php
    require_once("c://xampp/htdocs/zapateria/Controller/zapatoController.php");
    $obj = new zapatoController();
    $date = $obj->show($_GET['id_zapato']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="home.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?id=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?id=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Precio</th>
            <th scope="col">Color</th>
            <th scope="col">Estilo</th>
            <th scope="col">Talla</th>
            <th scope="col">Genero</th>
            <th scope="col">Cantidad</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id_zapato"]?></td>
            <td scope="col"><?= $date["precio"]?></td>
            <td scope="col"><?= $date["color"]?></td>
            <td scope="col"><?= $date["id_estilo"]?></td>
            <td scope="col"><?= $date["id_talla"]?></td>
            <td scope="col"><?= $date["id_genero"]?></td>
            <td scope="col"><?= $date["cantidad"]?></td>
        </tr>
    </tbody>
</table>

