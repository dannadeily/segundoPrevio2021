<?php
require 'Model.php';

class AsistenteModelo extends Model
{

  function __construct()
  {
  }
  //crear
  public function agregarAsistente($asistente = array())
  {
    foreach ($asistente as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into  asistente (id, tipoDocumento, numeroDocumento, apellido, nombre, email, institucion, pais, ciudad, password) VALUES
    ('$tipoDocumento','$descripcion','$numeroDocumento','$apellido','$nombre','$email','$institucion','$pais','$ciudad','$password')";

    $this->set_query();
  }
  //eliminar
    public function eliminarAsistente($id='')
  {
    $this->query="delete from asistente where id=$id";
    $this->set_query();
  }

//update
public function update($asistente=array())
{
  foreach ($asistente as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update asistente set
    tipoDocumento='$tipoDocumento',
    numeroDocumento='$numeroDocumento',
    apellido='$apellido',
    nombre='$nombre',
    email='$email',
    institucion='$institucion',
    pais='$pais',
    ciudad='$ciudad',
    password='$password'
    where id=$id";
    $this->set_query();
}
public function read(){

  $this->query="select * from asistente";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}
 ?>
