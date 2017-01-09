<?php

class ModeloBase extends EntidadBase {
  private $table;

  public function __construct($table)
  {
     $this->table = (string) $table;
     parent::__construct($table);
  }

  public function ejecutarSql($query)
  {
     $query = $this->db()->query($query);

     if ($query)
     {
        if ($query->num_rows() > 1)
        {
           while ($row = $query->fetch_object())
           {
              $result[] = $row;
           }
        }
        else if ($query->num_rows() == 1)
        {
            while ($row = $query->fetch_object())
            {
               $result[] = $row;
            }
        }
        else
        {
           $result = true;
        }
     }
     else {
       $result = false;
     }

     return $result;
  }

}
