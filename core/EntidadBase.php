<?php

class EntidadBase {

    private $table;
    private $db;
    private $conectar;


    public function __construct($table)
    {
       $this->table = (string) $table;

       require_once 'Conectar.php';

       $this->conectar = new Conectar();
       $this->db = $this->conectar->conexion();
    }

    public function getConectar()
    {
       return $this->conectar;
    }

    public function db()
    {
       return $this->db;
    }

    public function getAll()
    {
       $query = $this->db->query("SELECT * FROM $this->table ORDER BY id DESC");
       return $this->iterateQuery($query);
    }

    public function getById($id)
    {
       $query = $this->db->query("SELECT * FROM $this->table WHERE id = $id");
       return $this->iterateQuery($query);
    }

    public function getByColum($column, $value)
    {
       $query = $this->db->query("SELECT * FROM $this->table WHERE $column = '$value'");
       return $this->iterateQuery($query);
    }

    public function deleteById($id)
    {
       $query = $this->db->query("DELETE FROM $this->table WHERE id = $id");
       return $query;
    }

    public function deleteByColumn($column, $values)
    {
       $query = $this->db->query("DELETE FROM $this->table WHERE $column = '$value'");
       return $query;
    }

    private function iterateQuery($query)
    {
       $result = [];
       while ($row = $query->fetch_object()) {
          $result[] = $row;
       }
       return $result;
    }

}
