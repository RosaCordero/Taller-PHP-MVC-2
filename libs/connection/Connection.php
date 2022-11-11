<?php

namespace libs\connection;

use PDO;
use PDOException;

class Connection
{
    private PDO $connection;
    private $server;
    private $user;
    private $password;
    private $dataBase;


    public function __construct()
    {
        $this->server   = constant('HOST');
        $this->user      = constant('USER');
        $this->password = constant('PASSWORD');
        $this->dataBase  = constant('DB');
        $this->Connect();
    }

    public function Connect()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->server;dbname=$this->dataBase", "$this->user", "$this->password");
            error_log('Conexión a BD exitosa');
        } catch (PDOException $e) {
            error_log('Error en conexion BD :: ' . $e->getMessage());
        }
    }
    public function getConnection(): PDO
    {
        return $this->connection;
    }

}
