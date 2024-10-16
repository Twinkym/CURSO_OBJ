<?php 

/**
 * Summary of ClientesModel
 * 
 * @category DataBase_Conector
 * @package  Category
 * @author   David De La Puente <ddelapuente@gmail.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     http://url.com/
 */

 class ConectorDB
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $port;
    public $con;

    /**
     * Summary of __construct
     */
    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->db = "mvc";
        $this->port = "3306";
        $this->_conectarBD();
    }

    /**
     * Summary of seleccionarDatos
     * 
     * @param mixed $sql True
     *                   Return true if the SQL statement 
     *                   contains the specified parameters
     * 
     * @return bool|mysqli_result
     */
    public function seleccionarDatos($sql)
    {
        $this->_conectarBD();
        $datos = mysqli_query($this->con, $sql);
        $this->_desconectarBD();
        return $datos;
    }
}