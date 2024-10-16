<link rel="stylesheet" href="clase_libro.css">

<?php 

class Persona {
    private string $dni;
    private string $nombre;
    private string $apellidoPaterno;
    private string $apellidoMaterno;
    private string $sexo;
    private string $edad;

    // Constante 
    private const LETRAS_DNI = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
    public function __construct($dni, $nombre, $apellidoPaterno, $apellidoMaterno, $sexo, $edad){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->sexo = $sexo;
        $this->edad = $edad;
        echo "<br>Se ha creado una instancia de <mark><b>Persona</b></mark>: <b>$nombre</b>";
       
    }

    // Getters
    public function __getDni(){return $this->dni;}
    public function __getNombre(){return $this->nombre;}

    public function __getApellidoPaterno(){return $this->apellidoPaterno;}

    public function __getApellidoMaterno(){return $this->apellidoMaterno;}

    public function __getSexo(){return $this->sexo;}

    public function __getEdad(){return $this->edad;}

    // Setters
    public function __setDni($dni){$this->dni = $dni;}

    public function __setNombre($nombre){$this->nombre = $nombre;}

    public function __setApellidoPaterno($apellidoPaterno){$this->apellidoPaterno = $apellidoPaterno;}

    public function __setApellidoMaterno($apellidoMaterno){$this->apellidoMaterno = $apellidoMaterno;}

    public function __setSexo($sexo){$this->sexo = $sexo;}

    public function __setEdad($edad){$this->edad = $edad;}

    // Metodo para concatenar las variables y formar el nombre completo.
    public function nombreCompleto(){
        return "{$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }

    // Metodo para comprobar si es mayor de edad.
    public function esMayorDeEdad(){
        return $this->edad >= 18 ? "Es Mayor de edad." : "Es Menor de edad";
    }

    public function numerodni(): int {
        $dni = $this->dni;
        $inicio = 0;
        $longitud = strlen($this->dni) - 1; // No uses argumentos nombrados
        return (int) substr($dni, $inicio, $longitud); // Usa argumentos posicionales
    }
    
    public function letradni(){
        return substr($this->dni, -1);
    }
    public function dniCorrecto(){
        
        // Calcular la letra correccta.
        $indice = $this->numerodni() % 23;
        $letraCalculada = self::LETRAS_DNI[ $indice];

        //return $indice;
        // Comparar la letra proporcionada con la calculada.
        return $letraCalculada;
        
    }


    public function __toString(){
        $dniStatus =($this->dniCorrecto() == $this->letradni()) ? "DNI correcto" : "DNI incorrecto";

        return "
            <br><br>
            <table>
                <caption>Información sobre la Persona</caption>
                <tr><tr><th>Nombre Completo: </th><td>{$this->nombreCompleto()}</td></tr>
                <tr><th>Edad: </th><td>{$this->edad} {$this->esMayorDeEdad()}</td></tr>
                <tr><th>letra dni: </th><td>{$this->letradni()}</td></tr>
                <tr><th>DNI Correcto: </th><td>{$this->numerodni()} {$dniStatus}</td></tr>
            </table>;
        ";
    }
    
}

?>