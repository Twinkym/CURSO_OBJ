<?php 
Class Verificar{
    public $nif;
    private $ver = false;

    public function VerificarNif($nif){
    $this->nif = strtoupper($nif);

    // Validar DNI
    if(preg_match('/^[0-9]{8}[A-Z]$/', $nif)) {
        return comprobarDNI($nif);
    }

    // Validar NIE
    elseif (preg_match('/^[XYZ][0-9]{7}[A-Z]$/', $nif)) {
        return comprobarNIE($nif);
    }

    // Validar CIF (validación básica)
    elseif (preg_match('/^[ABCDEFGHIJKALMNPQRSUVW][0-9]{7}[0-9A-J]$/', $nif)) {
        return comprobarCIF($nif);
    }

    return $this->Respuestas;
}

}
function comprobarDNI($dni){
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
    $letras = "TRWAGMYFPDSBNJZSQVHLCKE";
    return $letra == $letras[$numeros % 23];
}

function comprobarNIE($nie){
    $nie = str_replace(['X', 'Y', 'Z'], ['0', '1', '2'], $nie);
    return comprobarDNI($nie);
}

function comprobarCIF($cif){
    return true;
}


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $nif = htmlspecialchars($_POST['nif']);
    if(VerificarNif($nif)) {
        echo "<p>El NIF ingresado es: " . $nif . "</p>";
    } else {
        echo "<p>El NIF ingresado no es válido: " . $nif . "</p>";
    }
    
}


if($_GET){

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
    <form method="post" action="">
        <input type="text" name="nif" placeholder="Escribe un NIF" minlength="9" maxlength="9" required/>
        <input type="submit" value="VERIFICAR"/>
    </form>    
</body>
</html>