<?php
require 'Model.php';

class TipoAsistenteModelo extends Model
{

  function __construct()
  {

  }
  //crear
  public function agregarTipo($tipo = array())
  {
    foreach ($tipo as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into tipoasistente
    (nombre,descripcion)values
    ('$nombre','$descripcion')";

    $this->set_query();
  }
  //eliminar
    public function eliminarTipo($id='')
  {
    $this->query="delete from tipoasistente where id=$id";
    $this->set_query();
  }

//update
public function update($Tipo=array())
{
  foreach ($Tipo as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update tipoasistente set nombre='$nombre',
    descripcion='$descripcion'
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from tipoasistente";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}





 ?>
