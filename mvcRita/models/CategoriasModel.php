<?php 
class categoriasModel extends Model {
	public function set( $categorias_data = [] ) {
		foreach ($categorias_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO categorias (categoria_id, categoria) VALUES ($categoria_id, '$categoria')";
		$this->set_query();
	}

	public function get( $categoria_id = '' ) {
		$this->query = ($categoria_id != '')
			?"SELECT * FROM categorias WHERE categoria_id = $categoria_id"
			:"SELECT * FROM categorias";
		
		$this->get_query();

		$num_rows = count($this->rows);

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
		}

		return $data;
	}

	public function del( $categoria_id = '' ) {
		$this->query = "DELETE FROM categorias WHERE categoria_id = $categoria_id";
		$this->set_query();
	}


}