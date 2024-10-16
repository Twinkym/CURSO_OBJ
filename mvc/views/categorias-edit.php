<?php 
$categorias_controller = new categoriasController();

if( $_POST['r'] == 'categorias-edit' && $_SESSION['role'] == 'Admin' && !isset($_POST['crud']) ) {

	$categorias = $categorias_controller->get($_POST['categoria_id']);

	if( empty($categorias) ) {
		$template = '
			<div class="container">
				<p class="item  error">No existe la categoría <b>%s</b></p>
			</div>
			<script>
				window.onload = function (){
					reloadPage("categorias")
				}
			</script>
		';

		printf($template, $_POST['categoria_id']);
	} else {
		$template_categorias = '
			<h2 class="p1">EDITAR CATEGORÍAS</h2>
			<form method="POST" class="item">
				<div class="p_25">
					<input type="text" placeholder="categoria_id" value="%s" disabled required>
					<input type="hidden" name="categoria_id" value="%s">
				</div>
				<div class="p_25">
					<input type="text" name="categoria" placeholder="categoria" value="%s" required>
				</div>
				<div class="p_25">
					<input  class="button  edit" type="submit" value="Editar">
					<input type="hidden" name="r" value="categorias-edit">
					<input type="hidden" name="crud" value="set">
				</div>
			</form>
		';

		printf(
			$template_categorias,
			$categorias[0]['categoria_id'],
			$categorias[0]['categoria_id'],
			$categorias[0]['categoria']
		);	
	}

} else if( $_POST['r'] == 'categorias-edit' && $_SESSION['role'] == 'Admin' && $_POST['crud'] == 'set' ) {	

	$save_categorias = [
		'categoria_id' => $_POST['categoria_id'],
		'categoria' => $_POST['categoria']
	];

	$categorias = $categorias_controller->set($save_categorias);

	$template = '
		<div class="container">
			<p class="item  edit">Se ha actualizado la categoría <b>%s</b></p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("categorias")
			}
		</script>
	';

	printf($template, $_POST['categoria_id']);

} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}