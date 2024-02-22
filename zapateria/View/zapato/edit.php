<?php
    require_once("c://xampp/htdocs/zapateria/controller/zapatoController.php");
    $obj = new zapatoController();
    $user = $obj->show($_GET['id_zapato']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id_zapato" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="text" name="precio" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Color</label>
        <div class="col-sm-10">
            <input type="text" name="color" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Estilo</label>
        <div class="col-sm-10">
            <input type="text" name="id_estilo" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Talla</label>
        <div class="col-sm-10">
            <input type="text" name="id_talla" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Genero</label>
        <div class="col-sm-10">
            <input type="text" name="id_genero" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad</label>
        <div class="col-sm-10">
            <input type="text" name="cantidad" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
