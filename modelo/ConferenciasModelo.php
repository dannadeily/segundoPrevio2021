<?php
require 'Model.php';

/**
 *
 */
class ConferenciasModelo extends Model
{

  function __construct()
  {

  }

  public function Listar()
  {
    $this->query="select * from Conferencia";
    $this->get_query();
    $num_rows=count($this->rows);
    $data = array();

    foreach ($this->rows as $datos) {
      array_push($data,$datos );

    }
    return $data;
  }

}



 ?>
