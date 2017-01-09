<?php

class Conectar {
    private $driver;
    private $host;
    private $user;
    private $password;
    private $database;
    private $charset;

    public function __construct()
    {
        $db_config      = require_once 'config/database.php';
        $this->driver   = $db_config['driver'];
        $this->host     = $db_config['host'];
        $this->user     = $db_config['user'];
        $this->database = $db_config['database'];
        $this->charset  = $db_config['charset'];
        $this->password = $db_config['password'];
    }

    public function conexion()
    {
        if ($this->driver == 'mysql' || $this->driver == null)
        {
           $connection = new mysqli($this->host, $this->user, $this->password, $this->database);
           $connection->query("SET NAMES '" . $this->charset . "'");
           return $connection;
        }
    }
}
