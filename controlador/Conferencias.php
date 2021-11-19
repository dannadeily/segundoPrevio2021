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
  public function listar($id="")
  {
  return   $this->model->listar($id);
  }


  public function registrar()
  {
    if (isset($_POST)) {
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
  header("location:../vista/listarConferencia.php");
}else {

  header("location:../vista/listarConferencia.php");
}
}

public function delete($id='')
{
  if ($_GET) {
    $id=$_GET['id'];
      $this->model->delete($id);
        header("location:../vista/listarConferencia.php");
  }else {
      header("location:../vista/listarConferencia.php");
  }
}

  public function update($conferencia=array()){
    if (isset($_POST)) {
      echo "aca entra";
    $conferencia=array(
      'id'=>$_POST['id'],
      'nombre' =>$_POST['nombre'],
    'abreviatura' =>$_POST['abreviatura'],
    'descripcion' =>$_POST['descripcion'],
    'objetivo' =>$_POST['objetivo'],
    'fechaInicio' =>$_POST['fechaInicio'] ,
    'fechaFin' =>$_POST['fechaFin'] ,
    'fechaPago' =>$_POST['fechaPago'] ,
    'fechaEnvioArticulos' =>$_POST['fechaEnviar'] ,
    'fechaRespuesta' =>$_POST['fechaRespuesta'] ,
    'valorInscripcion' =>$_POST['valorInscripcion']
  );
    $this->model->update($conferencia);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}










?>
