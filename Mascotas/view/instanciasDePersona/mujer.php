<?php 

class Mujer extends Persona {
    public $sexo = 'Mujer';

    public function esMadre() {
        $hijos = ($this->numHijos!=0) ? ' es madre de ' . $this->tieneHijos() : $this->tieneHijos();

        $msg = $this->nombreCompleto() . $hijos . ' y ' . $this->tieneMascotas();
        return $msg;
    }
}


