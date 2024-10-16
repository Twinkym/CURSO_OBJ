<?php 

abstract class Mascota {
    protected $mascotas = [];

    public function __construct(){
        $this->mascotas;
    }


    public function agregarMascota($objetoMascota){
        array_push($this->mascotas, $objetoMascota);
    }

    protected function tieneMascotas() {
        $nuMascotas = count($this->mascotas);
        $msg = ' ';
        $msg = match ($nuMascotas) {
            0 => ' no tiene mascotas.',
            1 => ' tiene 1 mascota.',
            default => " tiene $nuMascotas mascotas.",
        };
        return $msg;
    }

    protected function listaMascotas() {
        $numMascotas = count($this->mascotas);
        $msg = ' ';
        if ($numMascotas != 0) {
            $msg = 'Mascotas:<br>';
            foreach ($this->mascotas as $mascota) {
                $msg .= $mascota; 
            }
        }
        return $msg;
    }
}