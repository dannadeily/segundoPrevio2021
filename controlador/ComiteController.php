<?php
require '../modelo/ComiteModelo.php';

/**
 *
 */

class AsistentePaperControlador
{

  private $model;

  function __construct()
  {
    $this->model=new ComiteModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregar()
  {
    if (isset($_POST)) {
    $comite=array('id' =>$_POST['id'] ,
    'idAsistente' =>$_POST['idAsistente'] ,
    'idConferencia' =>$_POST['idConferencia']
    );

  $this->model->agregar($comite);
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

  public function update($comite=array()){
    if (isset($_POST)) {
    $comite=array(
      'id' =>$_POST['id'] ,
      'idAsistente' =>$_POST['idAsistente'] ,
      'idConferencia' =>$_POST['idConferencia']
  );
    $this->model->update($comite);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}
?>
