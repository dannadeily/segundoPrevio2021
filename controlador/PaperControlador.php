<?php
require '../modelo/PaperModelo.php';

/**
 *
 */

class PaperControlador
{

  private $model;

  function __construct()
  {
    $this->model=new PaperModelo();
  }
  public function read($id="")
  {
  return   $this->model->read($id);
  }


  public function agregar()
  {
    if (isset($_POST)) {
    $paper=array(
    'tituloEs' =>$_POST['tituloEs'] ,
    'palabrasClaveEs	' =>$_POST['palabrasClaveEs	'] ,
    'resumenEs' =>$_POST['resumenEs'] ,
    'tituloEn' =>$_POST['tituloEn'] ,
    'palabrasClave' =>$_POST['palabrasClave'] ,
    'resumenEn' =>$_POST['resumenEn'] ,
    'archivo' =>$_POST['archivo'] ,
    'idTopicoEvento' =>$_POST['idTopicoEvento'] ,
    'idEstadoPaper' =>$_POST['idEstadoPaper']
    );

  $this->model->agregar($paper);
  header("location:../vista/listarConferencia.php");
}else {

  header("location:../vista/listarConferencia.php");
}
}

public function eliminarAsistente($id='')
{
  if ($_GET) {
    $id=$_GET['id'];
      $this->model->eliminar($id);
        header("location:../vista/listarConferencia.php");
  }else {
      header("location:../vista/listarConferencia.php");
  }
}

  public function update($paper=array()){
    if (isset($_POST)) {
      $paper=array(
      'tituloEs' =>$_POST['tituloEs'] ,
      'palabrasClaveEs	' =>$_POST['palabrasClaveEs	'] ,
      'resumenEs' =>$_POST['resumenEs'] ,
      'tituloEn' =>$_POST['tituloEn'] ,
      'palabrasClave' =>$_POST['palabrasClave'] ,
      'resumenEn' =>$_POST['resumenEn'] ,
      'archivo' =>$_POST['archivo'] ,
      'idTopicoEvento' =>$_POST['idTopicoEvento'] ,
      'idEstadoPaper' =>$_POST['idEstadoPaper']
      );
    $this->model->update($paper);
    header("location:../vista/listarConferencia.php");
}else {
  header("location:../vista/listarConferencia.php");
}
  }

}










?>
