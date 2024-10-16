<?php 
$categorias_controller = new categoriasController();

if( $_POST['r'] == 'categorias-delete' && $_SESSION['role'] == 'Admin' && !isset($_POST['crud']) ) {

	$categorias = $categorias_controller->get($_POST['categoria_id']);

	if( empty($categorias) ) {
		$template = '
			<div class="container">
				<p class="item  error">No existe el categoria_id <b>%s</b></p>
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
			<h2 class="p1">Eliminar categorías</h2>
			<form method="POST" class="item">
				<div class="p1  f2">
					¿Estas seguro de eliminar la categoría:  
					<mark class="p1">%s</mark>?
				</div>
				<div class="p_25">
					<input  class="button  delete" type="submit" value="SI">
					<input class="button  add" type="button" value="NO" onclick="history.back()">
					<input type="hidden" name="categoria_id" value="%s">
					<input type="hidden" name="r" value="categorias-delete">
					<input type="hidden" name="crud" value="del">
				</div>
			</form>
		';

		printf(
			$template_categorias,
			$categorias[0]['categoria'],
			$categorias[0]['categoria_id']
		);	
	}

} else if( $_POST['r'] == 'categorias-delete' && $_SESSION['role'] == 'Admin' && $_POST['crud'] == 'del' ) {	

	$categorias = $categorias_controller->del($_POST['categoria_id']);

	$template = '
		<div class="container">
			<p class="item  delete">Categoría <b>%s</b> eliminada</p>
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