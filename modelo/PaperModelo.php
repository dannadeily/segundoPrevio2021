<?php
require 'Model.php';

class PaperModelo extends Model
{

  function __construct()
  {

  }
  //crear
  public function agregar($paper = array())
  {
    foreach ($paper as $key=>$datos) {
      $$key=$datos;
      }

    $this->query="insert into paper
    (tituloEs,palabrasClaveEs,resumenEs,tituloEn,palabrasClave,resumenEn,archivo,idTopicoEvento,idEstadoPaper)values
    ('$tituloEs','$palabrasClaveEs','$resumenEs','$tituloEn','$palabrasClave','$resumenEn','$archivo','$idTopicoEvento','$idEstadoPaper')";

    $this->set_query();
  }
  //eliminar
    public function eliminar($id='')
  {
    $this->query="delete from paper where id=$id";
    $this->set_query();
  }

//update
public function update($paper=array())
{
  foreach ($paper as $key=>$datos) {
    $$key=$datos;
    }
    $this->query="update paper set tituloEs='$tituloEs',
    palabrasClaveEs='$palabrasClaveEs',
    resumenEs='$resumenEs',
    tituloEn='$tituloEn',
    palabrasClave='$palabrasClave',
    resumenEn='$resumenEn',
    archivo='$archivo',
    idTopicoEvento='$idTopicoEvento',
    idEstadoPaper='$idEstadoPaper';
    where id=$id";
    $this->set_query();
}

public function read(){
  $this->query="select * from paper";
  $this->get_query();
  $num_rows=count($this->rows);
  $data = array();
  foreach ($this->rows as $datos) {
    array_push($data,$datos );
  }
  $return $data;
}
 ?>
