<?php
require 'Model.php';

class RegistroModelo extends Model
{

  function __construct()
  {

  }
  //crear
  public function agregar($registro = array())
  {
    foreach ($registro as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into registro
    (idAsistente,idConferencia)values
    ('$idAsistente','$idConferencia')";

    $this->set_query();
  }
  //eliminar
    public function eliminar($id='')
  {
    $this->query="delete from registro where id=$id";
    $this->set_query();
  }

//update
public function update($registro=array())
{
  foreach ($registro as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update registro set idAsistente='$idAsistente',
    idConferencia='$idConferencia'
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from registro";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}
 ?>
