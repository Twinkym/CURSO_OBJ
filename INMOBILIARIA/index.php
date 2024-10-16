
<?php
  include('Inmuebles.php');
  
  echo '<h1>Probando las clases Local y Piso</h1>';
  echo '<p>Creamos el local con referencia catastral ABC</p>';
  $local1 = new Local('ABC', 'Sótano 1', 'N/A', 1, 140, 0.05, 1200, 4, 2, true, false);
  echo($local1);

  echo '<p>Creamos ahora un piso y mostramos su ficha:</p>';
  $piso1 = new Piso('XYZ', 'Entresuelo', '-', 2.1, 110, 0.03, 1800, 5,3,0,2,1,0,1,'Sur','C');
  echo($piso1);

  echo '<p>Creamos otro local con referencia catastral DEF</p>';
  $local1 = new Local('DEF', 'Sótano 2', 'N/A', 1, 210, 0.1, 2100, 7, 3, true, true);
  echo($local1);

?>
<!-- Enlace al formulario para crear un nuevo Local -->
<h2>Crear un nuevo Local</h2>
<a href="vista_local.php">Ir al formulario para crear un Local</a>
<h2>Ejercicio:</h2>
<p>Crear un archivo <b>vista_local.php</b> que mediante un formulario envie por <em>post</em> los datos necesarios a un archivo <b>controller_local.php</b> para crear un local utilizando la <b>clase Local</b>.</p>



