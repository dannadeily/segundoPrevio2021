<?php
require '../modelo/TipoAsistenteModelo.php';

/**
 *
 */

class TipoAsistenteControlador
{

  private $model;

  function __construct()
  {
    $this->model=new TipoAsistenteModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregar()
  {
    if (isset($_POST)) {
    $tipoAsistente=array('id' =>$_POST['id'] ,
    'nombre' =>$_POST['nombre'],
    'descripcion' =>$_POST['descripcion'],
    'idAsistente' =>$_POST['idAsistente']

    );

  $this->model->agregar($tipoAsistente);
  header("location:../vista/listarConferencia.php");
}else {

  header("location:../vista/listarConferencia.php");
}
}

public function eliminar($id='')
{
  if ($_GET) {
    $id=$_GET['id'];
      $this->model->eliminar($id);
        header("location:../vista/listarConferencia.php");
  }else {
      header("location:../vista/listarConferencia.php");
  }
}

  public function update($tipoAsistente=array()){
    if (isset($_POST)) {
    $tipoAsistente=array(
      'id' =>$_POST['id'] ,
      'nombre' =>$_POST['nombre'],
      'descripcion' =>$_POST['descripcion'],
      'idAsistente' =>$_POST['idAsistente']

  );
    $this->model->update($tipoAsistente);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}
?>
