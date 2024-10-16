<?php 

abstract class Persona {
    // Propiedades.
    protected $nom;
    protected $cognoms;
    protected $pesKg;
    protected $estaturaCm;
    protected $hobbies = []; // Inicializar array vacio.
    protected $numFills;

    public function __construct($nom, $cognoms, $pesKg, $estaturaCm, $numFills) {
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->pesKg = $pesKg;
        $this->estaturaCm = $estaturaCm;
        $this->numFills = $numFills;
    }

    // Método para calcular el IMC.
    public function IMC(){
        $estaturaMetros = $this->estaturaCm / 100;
        return round($this->pesKg / ($estaturaMetros * $estaturaMetros), 2);
    }

    // Método para agregar un hobby.
    public function AgregarHobby($hobby) {
        $this->hobbies[] = $hobby;
    }

    // Método __toStrinig para mostrar los datos en forma de lista.
    public function __toString()
    {
        $hobbiesStr = empty($this->hobbies) ? "{$this->nom} no té hobbies" : implode(", ", $this->hobbies);
        return "
        <div class='card' style='width: 18rem; '>
            <ul class='list-group list-group-numbered'>
                <li class='list-group-item'>Nom: {$this->nom}</li>
                <li class='list-group-item'>Cognoms: {$this->cognoms}</li>
                <li class='list-group-item'>Pes (Kg): {$this->pesKg}</li>
                <li class='list-group-item'>Estatura (cm): {$this->estaturaCm}</li>
                <li class='list-group-item'>IMC: ". $this->IMC() ."</li>
                <li class='list-group-item'>Hobbies: $hobbiesStr</li>
                <li class='list-group-item'>Nombre de fills: {$this->numFills}</li>
            </ul>
        </div>";
    }
}

// Clases derivadas que heredan de Persona.
class Home extends Persona {
    protected $sexe = "Home";

    public function esPare() {
        return "{$this->nom} {$this->cognoms} és pare de {$this->numFills} fills";
    }

    public function __toString() {
        return parent::__toString() . "<li class='list-group-item'>Sexe: {$this->sexe} | {$this->esPare()}</li>";
    }
}


class Dona extends Persona {
    protected $sexe = "Dona";

    public function esMare() {
        return "{$this->nom} {$this->cognoms} és mare de  {$this->numFills} fills";
    }

    public function __tostring() {
        return parent::__toString() . "<li class='list-group-item'>Sexe: {$this->sexe} | {$this->esMare()}</li>";
    }
}