<?php
require 'Model.php';

/**
 *
 */
class ConferenciasModelo extends Model
{

  function __construct()
  {

  }

  public function Listar()
  {
    $this->query="select * from Conferencia";
    $this->get_query();
    $num_rows=count($this->rows);
    $data = array();

    foreach ($this->rows as $datos) {
      array_push($data,$datos );

    }
    return $data;
  }
  public function registrar($conferencia = array())
  {
    foreach ($conferencia as $key=>$datos) {
      $$key=$datos;
      }
      $this->query="insert into conferencia
(nombre,abreviatura,descripcion,objetivo,fechaInicio,
fechaFin,fechaPago,fechaEnvioArticulos,fechaRespuesta,
valorInscripcion)
      values($nombre,'$abreviatura','$descripcion',
      '$objetivo','$fechaInicio','$fechaFin','$fechaPago',
      '$fechaEnvioArticulos','$fechaRespuesta',
      '$valorInscripcion')";
      $this->set_query();
  }

}



 ?>
