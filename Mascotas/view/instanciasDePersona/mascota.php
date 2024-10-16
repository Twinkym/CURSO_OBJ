<?php 

class Mascota {
    public $nombre;
    public $tipo;

    public function __construct($nombre, $tipo) {
        $this->nombre = $nombre;
        $this->tipo = $tipo;

        echo '<p style="margin: 1px"> La mascota ' . $this->nombre . ' (' . $$this->tipo . ') ha sido creada</p>';
    }

    public function __tostring() {
        return '<p style="margin: 1px"> ' . $this->nombre . '(' . $this->tipo . ')</p>';
    }
}