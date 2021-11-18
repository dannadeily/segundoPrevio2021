<?php
require 'Model.php';

class EstadoAsistenteModelo extends Model
{

  function __construct()
  {

  }
  //crear
  public function agregarEstado($Estado = array())
  {
    foreach ($Estado as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into estadoasistente
    (nombre,descripcion)values
    ('$nombre','$descripcion')";

    $this->set_query();
  }
  //eliminar
    public function eliminarEstado($id='')
  {
    $this->query="delete from estadoasistente where id=$id";
    $this->set_query();
  }

//update
public function update($estado=array())
{
  foreach ($estado as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update estadoasistente set nombre='$nombre',
    descripcion='$descripcion'
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from estadoasistente";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}





 ?>
