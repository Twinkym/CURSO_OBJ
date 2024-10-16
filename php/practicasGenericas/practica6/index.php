<?php
    if ($_GET) {
        if (isset($_GET['action']) && !empty($_GET['action'])) {
            if($_GET['action'] == 'cerrar'){
                session_start();
                unset($_SESSION);
                session_destroy();
            }
        }
    }
    
    if ($_POST) {
        if (isset($_POST['action']) && !empty($_POST['action'])) {
            if($_POST['action'] == 'FORM_LOGIN') {
                // definir la accion.
                $dbuser = "root";
                $dbpass = "1234";
                if ($_POST['user'] == $dbuser && $_POST['pass'] == $dbpass) {
                    // entrar en la parte privada.
                    session_start();  
                    $_SESSION['user'] = $dbuser;
                    $_SESSION['color'] = 'green';
                }
                else {
                    // permanecer en login.
                    echo "Seguiremos en el login.";
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    
    
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
        include "./views/privado.php";
    } else {
        include "./views/login.php";
    }
    
?>
</body>
</html>