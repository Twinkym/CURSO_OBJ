<?php 
Class ConnectorBD{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;
    public $con;

    public function __construct(){
            $this->host = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->db = "mvc";
            $this->port = "3306";
            $this->ConnectarBD();
        
    }

    public function SelectData($sql){
        $this->ConnectarBD();
        $datos = mysqli_query($this->con,$sql);
        $this->DesconectarBD();
        return $datos;
    }

    private function ConnectarBD(){
        $this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->db,$this->port);
    }

    private function DesconectarBD(){
        $res = mysqli_close($this->con);
        return $res;
    }
}

$db = new ConnectorBD();
$sql = "SELECT * FROM `app_users`";
$datos = $db->SelectData($sql);
$sql = "SELECT * FROM `app_users` WHERE `rowid`=3";
$datos2 = $db->SelectData($sql);
foreach($datos as $dato){
echo print_r($dato);
}
foreach($datos2 as $dato2){
echo print_r($dato2);
}
