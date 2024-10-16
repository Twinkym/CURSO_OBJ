<?php

Class Saludo{
    public $saludo = "Hola Mundo!!!";

    public function Misaludo($nombre){
        $saludo1 = $this->MiSegundoSaludo();
        return $saludo1.$nombre;
    }

    private function MiSegundoSaludo(){
        return "Hola Nuevamente SR.";
    }

    public static function Saludar(){
        return "Mi nuevo Saludo";
    }
}

$sal = new Saludo();
echo $sal->Misaludo('Toni');
// echo $saludo;
// echo Saludo::Saludar();

?>
