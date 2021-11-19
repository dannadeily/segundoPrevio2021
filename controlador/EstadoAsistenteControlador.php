<?php
require '../modelo/EstadoAsistenteModelo.php';

/**
 *
 */

class EstadoAsistenteControlador
{

  private $model;

  function __construct()
  {
    $this->model=new EstadoAsistenteModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregar()
  {
    if (isset($_POST)) {
    $estadoasistente=array('id' =>$_POST['id'] ,
    'nombre' =>$_POST['nombre'],
    'descripcion' =>$_POST['descripcion'],
    'idAsistente' =>$_POST['idAsistente']

    );

  $this->model->agregar($estadoasistente);
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

  public function update($estadoasistente=array()){
    if (isset($_POST)) {
    $estadoasistente=array(
      'id' =>$_POST['id'] ,
      'nombre' =>$_POST['nombre'],
      'descripcion' =>$_POST['descripcion'],
      'idAsistente' =>$_POST['idAsistente']

  );
    $this->model->update($estadoasistente);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}
?>
