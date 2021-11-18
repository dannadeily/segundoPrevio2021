<?php
require 'Model.php';

class AsistentePaperModelo extends Model
{

  function __construct()
  {

  }
  //crear
  public function agregar($asistentePaper = array())
  {
    foreach ($asistentePaper as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into asistentepaper
    (idAsistente,idPaper)values
    ('$idAsistente','$idPaper')";

    $this->set_query();
  }
  //eliminar
    public function eliminar($id='')
  {
    $this->query="delete from asistentepaper where id=$id";
    $this->set_query();
  }

//update
public function update($asistentePaper=array())
{
  foreach ($asistentePaper as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update asistentepaper set idAsistente='$idAsistente',
    idPaper='$idPaper'
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from asistentepaper";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}
 ?>
