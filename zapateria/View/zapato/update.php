<?php
    require_once("c://xampp/htdocs/zapateria/Controller/zapatoController.php");
    $obj = new zapatoController();
    $obj->update($_POST['id_zapato'],$_POST['precio'],$_POST['color'],$_POST['id_estilo'],$_POST['id_talla'],$_POST['id_genero'],$_POST['cantidad']);
?>