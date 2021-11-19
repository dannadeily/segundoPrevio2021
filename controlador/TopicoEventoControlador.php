<?php
require '../modelo/TopicoEventoModelo.php';

/**
 *
 */

class TopicoEventoControlador
{

  private $model;

  function __construct()
  {
    $this->model=new TopicoEventoModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregar()
  {
    if (isset($_POST)) {
    $topico=array('id' =>$_POST['id'] ,
    'nombre' =>$_POST['nombre'],
    'descripcion' =>$_POST['descripcion'],
    'idConferencia' =>$_POST['idConferencia']

    );

  $this->model->agregar($topico);
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

  public function update($topico=array()){
    if (isset($_POST)) {
    $topico=array(
      'id' =>$_POST['id'] ,
      'nombre' =>$_POST['nombre'],
      'descripcion' =>$_POST['descripcion'],
      'idConferencia' =>$_POST['idConferencia']

  );
    $this->model->update($topico);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}
?>
