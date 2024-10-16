<?php 
print('<h2 class="p1">GESTIÓN DE CATEGORIAS</h2>');

$categorias_controller = new categoriasController();
$categorias = $categorias_controller->get();

if( empty($categorias) ) {
	print( '
		<div class="container">
			<p class="item  error">No hay categorias</p>
		</div>
	');
} else {
	$template_categorias = '
	<div class="item">
		<table>
			<tr>
				<th>Id</th>
				<th>categorias</th>
				<th colspan="2">
					<form method="POST">
						<input type="hidden" name="r" value="categorias-add">
						<input class="button  add" type="submit" value="Agregar">
					</form>
				</th>
			</tr>';

	for ($n=0; $n < count($categorias); $n++) { 
		$template_categorias .= '
			<tr>
				<td>' . $categorias[$n]['categoria_id'] . '</td>
				<td>' . $categorias[$n]['categoria'] . '</td>
				<td>
					<form method="POST">
						<input type="hidden" name="r" value="categorias-edit">
						<input type="hidden" name="categoria_id" value="' . $categorias[$n]['categoria_id'] . '">
						<input class="button  edit" type="submit" value="Editar">
					</form>
				</td>
				<td>
					<form method="POST">
						<input type="hidden" name="r" value="categorias-delete">
						<input type="hidden" name="categoria_id" value="' . $categorias[$n]['categoria_id'] . '">
						<input class="button  delete" type="submit" value="Eliminar">
					</form>
				</td>
			</tr>
		'; 
	}

	$template_categorias .= '
		</table>
	</div>
	';

	print($template_categorias);
}