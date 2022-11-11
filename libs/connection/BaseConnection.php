<?php

namespace libs\connection;
use PDO;

require_once 'Connection.php';

class BaseConnection
{
    public PDO $db;
    function __construct()
    {
        $this->db = (new Connection())->getConnection();
        $this->db->query("SET NAMES 'utf8'");
    }

    function query($query)
    {
        return $this->db->query($query);
    }

    function prepare($query)
    {
        return $this->db->prepare($query);
    }

}
