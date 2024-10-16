<?php

class NifModel
{

    public function verificarNif($nif)
    {
        $nif = strtoupper($nif);

        // Validar DNI
        if (preg_match('/^[0-9]{8}[A-Z]$/', $nif)) {
            return $this->comprobarDNI($nif);
        }

        // Validar NIE
        elseif (preg_match('/^[XYZ][0-9]{7}[A-Z]$/', $nif)) {
            return $this->comprobarNIE($nif);
        }

        // Validar CIF (validación básica)
        elseif (preg_match('/^[ABCDEFGHJKLMNPQRSUVW][0-9]{7}[0-9A-J]$/', $nif)) {
            return $this->comprobarCIF($nif);
        }

        return false;
    }

    private function comprobarDNI($dni)
    {
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        return $letra == $letras[intval($numeros) % 23];
    }

    private function comprobarNIE($nie)
    {
        $nie = str_replace(['X', 'Y', 'Z'], ['0', '1', '2'], $nie);
        return $this->comprobarDNI($nie);
    }

    private function comprobarCIF($cif)
    {
        // Validación básica del CIF
        return true; // Asume que es válido.
    }
}
