<?php
include_once 'Model/zapato.php';

class control{

	public $MODEL;

	public function __construct(){
		$this->MODEL = new zapato();

	}

	public function index(){
		include_once 'View/home.php';

	}

	public function show($id_zapato){
		return ($this->MODEL->show($id_zapato) != false) ? $this->MODEL->show($id_zapato) : header("Location:home.php");
	}

}

?>