<?php
    require_once("c://xampp/htdocs/zapateria/controller/zapatoController.php");
    $obj = new zapatoController();
    $obj->delete($_GET['id_zapato']);

?>