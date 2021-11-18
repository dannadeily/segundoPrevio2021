<?php
require 'Model.php';


/**
 *faltan los get and set
 */
class TipoAsistenteModelo extends Model
{
  public $id;
  public $nombre;
  public $descripcion;

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
    ('$nombre','$descripcion')";

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
