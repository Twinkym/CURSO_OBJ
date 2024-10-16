<?php 

class Hombre extends Persona {
    public $sexo = 'Hombre';

    public function esPadre() {
        $hijos = ($this->numHijos!=0) ? ' es padre de ' . $this->tieneHijos() : $this->tieneHijos();

        $msg = $this->nombreCompleto() . $hijos . ' y ' . $this->tieneMascotas();
        return $msg;
    }
}


