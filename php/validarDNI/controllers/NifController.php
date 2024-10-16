<?php
require_once 'models/NifModel.php';

class NifController
{
    private $model;

    public function __construct()
    {
        $this->model = new NifModel();
    }

    public function handleRequest()
    {
        $message = null;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nif = htmlspecialchars($_POST['nif']);
            $isValid = $this->model->verificarNif($nif);
            $message = $isValid ? "El NIF ingresado es válido: " . htmlspecialchars($nif) : "El NIF ingresado no es válido: " . htmlspecialchars($nif);
        } else {
            require 'views/nif_form.php';
        }
    }
}
