<?php 

include 'local_php'; // Incluyo la clase Local.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibe los datos del formulario por el metodo POST.
    $refCatastral = $_POST['refCatastral'] ?? '';
    $planta = $_POST['planta'] ?? '';
    $puerta = $_POST['puerta'] ?? '';
    $numAmbientes = $_POST['numAmbientes'] ?? '';
    $numAsseos = $_POST['numAseos'] ?? '';
    $superficie = $_POST['superficie'] ?? '';
    $coefPropiedad = $_POST['coefPropiedad'] ?? '';
    $precio = $_POST['precio'] ?? '';
    $salidaHumos = $_POST['selidaHumos'] ?? '';
    $cedulaHabitabilidad = $_POST['cedulaHabitabilidad'] ?? '';

    // Crea una instacia de la clase local
    $local = new Local($refCatastral, $planta, $puerta, $numAmbientes, $numAsseos, $alicuota, $superficie, $coefPropiedad, $precio, $salidaHumos, $cedulaHabitabilidad);

    // Mostrar el resultado o redirigir a otra página.
    echo "Local creado con éxito:<br>";
    echo "Referencia Catastral: $refCatastral<br>";
    echo "Planta: $planta<br>";
    echo "Puerta: $puerta<br>";
    echo "Número de Ambientes: $numAmbientes<br>";
    echo "Número de Aseos: $numAsseos<br>";
    echo "Alicuota: $alicuota<br>";
    echo "Superficie: $superficie<br>";
    echo "Coeficiente: $coefPropiedad<br>";
    echo "Precio: $precio<br>";
    echo "Salida de Humos: $salidaHumos<br>";
    echo "Cédula de Habitabilidad: $cedulaHabitabilidad<br>";

}

// Métodos que se usarán en la clase Local (deberían estar en local.php)
class Local extends Inmueble {
    protected $numAmbientes;
    protected $numAseos;
    protected $salidaHumos;
    protected $cedulaHabitabilidad;

    // Setter genérico para asignar valores.
    public function set($property, $value){
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "La propiedad $property no existe en la clase Local<br>";
            return null;
        }
    }

    public function get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        } else {
            echo "La propiedad $property no existe en la clase Local.<br>";
            return null;
        }
    }

    // Mñetodo para mostrar el objeto como string.
    public function __tostring() {
        return "Local con {$this->numAmbientes} ambientes, {$this->numAseos} aseos, salida de humos: " . ($this->salidaHumos ? 'Si' : 'No') . ", cédula de habitabilidad: " . ($this->cedulaHabitabilidad ? 'Sí' : 'No') . ".<br>";
    }
}

    // Crear un objeto Local
$local = new Local($refCatastral, $planta, $puerta, $numAmbientes, $numAseos, $alicuota, $superficie, $coefPropiedad, $precio, $salidaHumos, $cedulaHabitabilidad);

// Asignar valores usando el setter genérico
$local->set('numAmbientes', 4);
$local->set('numAseos', 2);
$local->set('salidaHumos', true);
$local->set('cedulaHabitabilidad', false);

// Obtener valores usando el getter genérico
echo "Número de ambientes: " . $local->get('numAmbientes') . "<br>";
echo "Número de aseos: " . $local->get('numAseos') . "<br>";
echo "Salida de humos: " . ($local->get('salidaHumos') ? 'Sí' : 'No') . "<br>";
echo "Cédula de habitabilidad: " . ($local->get('cedulaHabitabilidad') ? 'Sí' : 'No') . "<br>";

// Usar el método __toString para mostrar el objeto completo
echo $local;

    
