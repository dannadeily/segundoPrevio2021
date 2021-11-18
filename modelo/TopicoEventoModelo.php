<?php
require 'Model.php';

class TopicoEventoModelo extends Model
{

  function __construct()
  {

  }
  //crear
  public function agregar($topico = array())
  {
    foreach ($topico as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into topicoevento
    (nombre,descripcion,idConferencia)values
    ('$nombre','$descripcion',$idConferencia)";

    $this->set_query();
  }
  //eliminar
    public function eliminar($id='')
  {
    $this->query="delete from topicoevento where id=$id";
    $this->set_query();
  }

//update
public function update($topico=array())
{
  foreach ($topico as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update topicoevento set nombre='$nombre',
    descripcion='$descripcion'
    idConferencia='$idConferencia'
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from topicoevento";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}
 ?>
