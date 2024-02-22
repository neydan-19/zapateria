<?php
    class zapatoModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/zapateria/config/conexion.php");
            $con = new conexion();
            $this->PDO = $con->conectar();
        }
        public function insertar($precio,$color,$id_estilo,$id_talla,$id_genero,$cantidad){
            $numero = rand(1000,9999);
            $stament = $this->PDO->prepare("INSERT INTO dbozapato VALUES($numero,:precio,:color,:id_estilo,:id_talla,:id_genero,:cantidad)");
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":color",$color);
            $stament->bindParam(":id_estilo",$id_estilo);
            $stament->bindParam(":id_talla",$id_talla);
            $stament->bindParam(":id_genero",$id_genero);
            $stament->bindParam(":cantidad",$cantidad);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id_zapato){
            $stament = $this->PDO->prepare("SELECT * FROM dbozapato where id_zapato = :id_zapato limit 1");
            $stament->bindParam(":id_zapato",$id_zapato);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM dbozapato");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id_zapato,$precio,$color,$id_estilo,$id_talla,$id_genero,$cantidad){
            $stament = $this->PDO->prepare("UPDATE dbozapato SET precio = :precio , color = :color , id_estilo = :id_estilo ,
            id_talla = :id_talla , id_genero = :id_genero, cantidad = :cantidad WHERE id_zapato = :id_zapato ");
            $stament->bindParam(":precio",$precio);
            $stament->bindParam(":id_zapato",$id_zapato);
            $stament->bindParam(":color",$color);
            $stament->bindParam(":id_estilo",$id_estilo);
            $stament->bindParam(":id_talla",$id_talla);
            $stament->bindParam(":id_genero",$id_genero);
            $stament->bindParam(":cantidad",$cantidad);
            return ($stament->execute()) ? $id_zapato : false;
        }
        public function delete($id_zapato){
            $stament = $this->PDO->prepare("DELETE FROM dbozapato WHERE id_zapato = :id_zapato");
            $stament->bindParam(":id_zapato",$id_zapato);
            return ($stament->execute()) ? true : false;
        }
    }

?>