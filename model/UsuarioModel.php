<?php

class UsuarioModel extends ModeloBase {

    private $table;

    public function __construct($table)
    {
       $this->table = 'usuariuos';
       parent::__construct($this->table);
    }

    public function getUnUsuario()
    {
       $query   = "SELECT * FROM usuarios WHERE email = 'jhon@gmail.com'";
       $usuario = $this->db()->query($query);
       return $usuario;
    }

}
