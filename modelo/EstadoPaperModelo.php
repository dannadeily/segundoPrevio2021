<?php
require 'Model.php';

class EstadoPaperModelo extends Model
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

    $this->query="insert into estadopaper
    (nombre,descripcion)values
    ('$nombre','$descripcion')";

    $this->set_query();
  }
  //eliminar
    public function eliminarEstado($id='')
  {
    $this->query="delete from estadopaper where id=$id";
    $this->set_query();
  }

//update
public function update($estado=array())
{
  foreach ($estado as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update estadopaper set nombre='$nombre',
    descripcion='$descripcion'
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from estadopaper";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}





 ?>
