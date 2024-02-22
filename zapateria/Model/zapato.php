<?php
 class zapato{

 	public $cnx;

 	public function __construct(){
 		try{
 			$this->cnx = conexion::conectar();

 		}catch (Exception $e){
 			die($e->getMessage());
 		}
	}

	public function listar(){
		try{
			//$query = "SELECT z.id_zapato,z.precio,z.color,e.estilo,t.talla,g.genero,z.cantidad FROM dbozapato z INNER JOIN dboestilo e on z.id_estilo = e.id_estilo INNER JOIN dbotalla t on z.id_talla = t.id_talla INNER JOIN dbogenero g on z.id_genero = g.id_genero ";

			$query = "SELECT * FROM dbozapato";
			$stm = $this->cnx->prepare($query);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e){
			die($e->getMessage());
		}

	}


 }

?>