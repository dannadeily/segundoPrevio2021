<?php
require '../modelo/ConferenciasModelo.php';

/**
 *
 */

class Conferencias
{

  private $model;

  function __construct()
  {
    $this->model=new ConferenciasModelo();
  }
  public function listar()
  {
  return   $this->model->listar();
  }


  public function registrar()
  {
    echo "registrar";
    if (isset($_POST)) {
echo "if";
    $conferencia=array('nombre' =>$_POST['nombre'] ,
    'abreviatura' =>$_POST['abreviatura'] ,
    'descripcion' =>$_POST['descripcion'] ,
    'objetivo' =>$_POST['objetivo'] ,
    'fechaInicio' =>$_POST['fechaInicio'] ,
    'fechaFin' =>$_POST['fechaFin'] ,
    'fechaPago' =>$_POST['fechaPago'] ,
    'fechaEnvioArticulos' =>$_POST['fechaEnviar'] ,
    'fechaRespuesta' =>$_POST['fechaRespuesta'] ,
    'valorInscripcion' =>$_POST['valorInscripcion']
  );
  $this->model->registrar($conferencia);
  //header("location:../vista/listarConferencia.php");
}else {
  echo "else";
  //header("location:../vista/listarConferencia.php");
}
}
}









?>
