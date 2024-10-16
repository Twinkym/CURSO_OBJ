<?php
require_once('model.php');
$texto = "Hola ciudad: ";
$texto2 = "desde el ";

if ($_GET) {
    if (isset($_GET['accion']) && !empty($_GET['accion'])) {
        if ($_GET['accion'] == 'ENVIAR_FORM') {
            $name = $_GET['name'];
            header('location:index.php?name=' . $name);
        }
        // echo '<script> window.location.href = "index.php?name='.$name. '"; </script>';

    }
}

if ($_POST) {
    if (isset($_POST['accion']) && !empty($_POST['accion'])) {
        if ($_POST['accion'] == 'AJAX') {
            $ciudad = $_POST['ciudad'];
            header('location:index.php?ciudad='.$ciudad. ''); //redirecciona a la misma pagina
            $db = new ConectorBD();
            $sql = "SELECT `email` FROM `app_users` WHERE `rowid`= 4";
            $dato = $db->SeleccionarDatos($sql);
            foreach ($datos as $dato => $value);
            echo $res = $texto.$ciudad.$texto2.'y el mail es:'.$dato['email'];    
        }
    }
    
}


?>