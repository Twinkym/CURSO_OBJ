<?php 
if( $_POST['r'] == 'categorias-add' && $_SESSION['role'] == 'Admin' && !isset($_POST['crud']) ) {
	print '
		<h2 class="p1">AGREGAR CATEGORIA</h2>
		<form method="POST" class="item">
			<div class="p_25">
				<input type="text" name="categoria" placeholder="categoria" required>
			</div>
			<div class="p_25">
				<input  class="button  add" type="submit" value="AGREGAR">
				<input type="hidden" name="r" value="categorias-add">
				<input type="hidden" name="crud" value="set">
			</div>
		</form>
	';	
} else if( $_POST['r'] == 'categorias-add' && $_SESSION['role'] == 'Admin' && $_POST['crud'] == 'set' ) {
	$categorias_controller = new categoriasController();

	$new_categorias = [
		'categoria_id' => 0,
		'categoria' => $_POST['categoria']
	];

	$categoria = $categorias_controller->set($new_categorias);

	$template = '
		<div class="container">
			<p class="item  add">Se ha agregado la categoría <b>%s</b>.</p>
		</div>
		<script>
			window.onload = function () {
				reloadPage("categorias")
			}
		</script>
	';

	printf($template, $_POST['categoria']);
} else {
	$controller = new ViewController();
	$controller->load_view('error401');
}