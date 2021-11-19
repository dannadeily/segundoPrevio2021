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

  public function Listar($id="")
  {
    if($id!=''){
      $this->query="select * from conferencia where id=$id";
    }else {
     $this->query="select * from conferencia";
    }
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
      values('$nombre','$abreviatura','$descripcion',
      '$objetivo','$fechaInicio','$fechaFin','$fechaPago',
      '$fechaEnvioArticulos','$fechaRespuesta',
      '$valorInscripcion')";
      $this->set_query();
  }


       public function delete($id=''){

         $this->query="delete from conferencia where id=$id";
         $this->set_query();
       }


       public function update($conferencia=array())
       {

           // code...

         foreach ($conferencia as $key=>$datos) {
           $$key=$datos;
           }
           echo $id;
           $this->query=" update conferencia set
           nombre='$nombre',
           abreviatura='$abreviatura',
           descripcion='$descripcion',
           objetivo='$objetivo',
           fechaInicio='$fechaInicio',
           fechaFin='$fechaFin',
           fechaPago='$fechaPago',
           fechaEnvioArticulos='$fechaEnvioArticulos',
           fechaRespuesta='$fechaRespuesta',
           valorInscripcion=$valorInscripcion
           where id=$id ";
           $this->set_query();
       }


}



 ?>
