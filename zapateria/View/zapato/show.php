<?php
    require_once("c://xampp/htdocs/zapateria/zapateria/Controller/control.php");
    $obj = new control();
    $date = $obj->show($_GET['id_zapato']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="home.php" class="btn btn-primary">Regresar</a>
    

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date->id_zapato?></td>
            
        </tr>
    </tbody>
</table>

