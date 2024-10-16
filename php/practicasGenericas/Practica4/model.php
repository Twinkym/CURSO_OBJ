<?php

class ConectorBD
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;
    public $con;

    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "mvc";
        $this->port = "3306";
        $this->ConectarBD();
    }
    public function SeleccionarDatos($sql)
    {
        $this->ConectarBD();
        $datos = mysqli_query($this->con, $sql);
        $this->DesconectarBD();
        return $datos;
    }
    private function ConectarBD()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db, $this->port);
    }
    private function DesconectarBD()
    {
        $res = mysqli_close($this->con);
        return $res;
    }
}
