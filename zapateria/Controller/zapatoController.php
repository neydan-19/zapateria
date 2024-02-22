<?php
    class zapatoController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/zapateria/model/zapatoModel.php");
            $this->model = new zapatoModel();
        }
        public function guardar($precio,$color,$id_estilo,$id_talla,$id_genero,$cantidad){
            $id_zapato = $this->model->insertar($precio,$color,$id_estilo,$id_talla,$id_genero,$cantidad);
            return ($id_zapato!=false) ? header("Location:show.php?id=".$id_zapato) : header("Location:create.php");  
        }
        public function show($id_zapato){
            return ($this->model->show($id_zapato) != false) ? $this->model->show($id_zapato) : header("Location:home.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id_zapato,$precio,$color,$id_estilo,$id_talla,$id_genero,$cantidad){
            return ($this->model->update($id_zapato,$precio,$color,$id_estilo,$id_talla,$id_genero,$cantidad) != false) ? header("Location:show.php?id=".$id_zapato) : header("Location:home.php");
        }
        public function delete($id_zapato){
            return ($this->model->delete($id_zapato)) ? header("Location:home.php") : header("Location:show.php?id=".$id_zapato) ;
        }
    }

?>