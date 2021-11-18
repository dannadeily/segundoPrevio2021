<?php
require 'Model.php';


/**
 *
 */
class TipoAsistenteModelo extends Model
{

  function __construct()
  {

  }
  public function agregarTipo($tipo = array())
  {
    foreach ($cliente as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into cliente
    (nombre,apellido,direccion,telefono)values
    ('$nombre','$apellido','$direccion','$telefono')";

    $this->set_query();
  }
  }
  public function eliminarTipo($id='')
  {
    $this->query="delete from categoria where id_categoria=$id_categoria";
    $this->set_query();
  }
  }
}





 ?>
