<?php
require '../modelo/AsistentePaperModelo.php';

/**
 *
 */

class AsistentePaperControlador
{

  private $model;

  function __construct()
  {
    $this->model=new AsistentePaperModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregar()
  {
    if (isset($_POST)) {
    $asistentePaper=array('id' =>$_POST['id'] ,
    'idAsistente' =>$_POST['idAsistente'] ,
    'idPaper' =>$_POST['idPaper']
    );

  $this->model->agregar($asistentePaper);
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

  public function update($asistentePaper=array()){
    if (isset($_POST)) {
    $asistentePaper=array(
      'id' =>$_POST['id'] ,
      'idAsistente' =>$_POST['idAsistente'] ,
      'idPaper' =>$_POST['idPaper']
  );
    $this->model->update($asistentePaper);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}










?>
