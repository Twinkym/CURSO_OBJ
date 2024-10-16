<?php 
class categoriasController {
	private $model;

	public function __construct() {
		$this->model = new categoriasModel();
	}

	public function set( $categorias_data = [] ) {
		$this->model->set($categorias_data);
	}

	public function get( $categoria_id = '' ) {
		return $this->model->get($categoria_id);
	}

	public function del( $categoria_id = '' ) {
		return $this->model->del($categoria_id);
	}

}