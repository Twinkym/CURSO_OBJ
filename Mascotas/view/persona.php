<?php 

abstract class Persona {
    protected $nombre;
    protected $apellidos;
    protected $numHijos;
    protected $librosLeidos;

    public function __construct($nombre, $apellidos, $numHijos) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->numHijos = $numHijos;
    }

   

    public function nombreCompleto(){
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function __setHijos($numHijos) {
        $this->numHijos = $numHijos;
        echo '<p style="color: red;"> Se ha cambiado el numero de hijos de ' . $this->nombreCompleto() . ' a ' . $this->numHijos . '</p>';
    }

    

    protected function tieneHijos(){
        $msg = ' ';
        $msg = match ($this->numHijos) {
            0 => ' no tiene hijos.',
            1 => ' tiene 1 hijo.',
            default => $this->numHijos . ' hijos',
        };
        return $msg;
    }

}