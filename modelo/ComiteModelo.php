<?php
require 'Model.php';

class ComiteModelo extends Model
{

  function __construct()
  {

  }
  //crear
  public function agregar($comite = array())
  {
    foreach ($comite as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into comite
    (idAsistente,idConferencia)values
    ('$idAsistente','$idConferencia')";

    $this->set_query();
  }
  //eliminar
    public function eliminar($id='')
  {
    $this->query="delete from comite where id=$id";
    $this->set_query();
  }

//update
public function update($comite=array())
{
  foreach ($comite as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update comite set idAsistente='$idAsistente',
    idConferencia='$idConferencia'
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from comite";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}
 ?>
